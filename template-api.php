<?php /* Template Name: API Test */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $client_id = "7";
  $client_secret = "90547486-D933-47D8-A331-D614C8032688";

  require_once(WP_PLUGIN_DIR . "/gsn-api-client/gsn-api-client.php");
  $APIClient = new GsnApiClient($client_id, $client_secret);
  $APIClient ->authenticate();
  echo "<h2>Test /store/list/</h2>";
  $stores = $APIClient->get("/store/list/" . $client_id);
  var_dump($stores);

  echo "<h2>Test /Content/GetAll/</h2>";
  $content = $APIClient->post("/Content/GetAll/" . $client_id);

  var_dump($content);

  echo "<h2>Test /profile/Register</h2>";

$profile = Array(
  /*
"WelcomeSubject" => "sample string 1",
"WelcomeMessage" => "sample string 2",
"WelcomeCaptchaChallenge" => "sample string 3",
"WelcomeCaptchaResponse" => "sample string 4",
/*"Id" = 1;*/
"SiteId" => 7,
"FirstName" => "Testy",
"MiddleName" => "Tester",
"LastName" => "Testing",
"Password" => "meaas**&76",
"UserName" => "TestingDude",
"Email" => "gozz@gozz.com",
/*,
"Phone" => "12",
"ReceiveEmail" => true,
"ReceiveSms" => true,
/*"ExternalId" => "sample string 13",*/
/*"ExternalHouseholdId" => "sample string 14",
"PrimaryStoreId" => 1,
"AddressLine1" => "sample string 15",
"AddressLine2" => "sample string 16",
"City" => "sample string 17",
"State" => "sample string 18",
"PostalCode" => "00019",
"FacebookUserId" => "sample string 20",
"LegacyId" => 1,*/
"StoreNumber" => "515",
/*
"CreateDate" = "2015-04-08T11:53:31.0029701-05:00",
"ModifyDate" = "2015-04-08T11:53:31.0029701-05:00",

"NonProfitCode" => "sample string 23",
"IsECard" => true*/
);


$headers = array(
  "site_id"=>$client_id
);

 $registrationResponse = $APIClient->post("/profile/Register", $profile, $headers);

 var_dump($registrationResponse);

/*
  // retrieve profile
  $profile = $apiClient->get("/profile/by", false, array("site_id: ".$client_id));

  // update profile
  FirstName = "Tom";
  $updatedProfile = $apiClient->post("/profile/update", get_object_vars($profile), array("site_id: ".$client_id));
  */



 ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
