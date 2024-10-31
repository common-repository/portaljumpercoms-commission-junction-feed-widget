<?php
/*
Plugin name: portaljumper.com's commission junction datafeed widget
Plugin URI: http://portaljumper.com
Description: This commission junction plugin places a 200 px. wide widget that will automatically pull random affiliate posts out of your commission junction affiliate network's datafeeds. Simply enter your credentials in the widget area and place the widget. <strong><font color='red'>Visit <a href='http://portaljumper.com'>portaljumper.com</a> for more widgets, info and tips.</font>
Version: 2.6
Author: Peter scheepens
Author URI: http://portaljumper.com
*/
add_action( 'widgets_init', 'pj_CJ_widget' );
function pj_CJ_widget() {
	register_widget( 'portaljumper_commission_junction_widget' );
}
class portaljumper_commission_junction_widget extends WP_Widget {
function portaljumper_commission_junction_widget() {
		$widget_ops = array( 'classname' => 'cjexample', 'description' => __('This widget will show automatic affiliate advertisement from your commission junction network. Earn affiliate-income on auto-pilot. Automatic datafeed extractors by portaljumper.com', 'cjexample') );
		$control_ops = array( 'width' => 600, 'height' => 350, 'id_base' => 'cjexample-widget' );
		$this->WP_Widget( 'cjexample-widget', __('portaljumper.com commission junction feed widgets', 'cjexample'), $widget_ops, $control_ops );
	}
	function widget( $args, $instance ) {
		extract( $args );
		$cjtitle = apply_filters('widget_title', $instance['cjtitle'] );
		$user = $instance['cjname'];
		$cTxtFile = $instance['cjmerch'];
		echo $before_widget;
		if ( $cjtitle )
		echo $before_title . $cjtitle . $after_title;

// begin on screen info	
?>
<iframe src="http://portaljumper.com/cjshops/index.php?merchantid=<?PHP echo $cTxtFile; ?>&columns=1&picwidth=160&showcount=1&myid=<?PHP echo $user; ?>&layout=C&pick=random&grid=on&panel=hide" width="200" Height="200" scrolling=no frameborder=0>portaljumper.com embedding the worlds media</iframe>

<?php
// end on screen info

		echo $after_widget;
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['cjtitle'] = strip_tags( $new_instance['cjtitle'] );
		$instance['cjname'] = strip_tags( $new_instance['cjname'] );
		$instance['cjmerch'] = strip_tags( $new_instance['cjmerch'] );
		return $instance;
	}
	function form( $instance ) {
		$defaults = array( 'cjtitle' => __('portaljumper.com tools', 'cjexample'), 'cjname' => __('4127549', 'cjexample'), 'cjmerch' => __('select a merchant', 'cjexample'));
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<p align="center">
		<h3>A portaljumper.com free affiliate tool</h3>
		</p><p align="center">
		This widget automatically parses commission junction affiliate datafeeds and displays your rotating affiliated ads.<br> <a href="http://www.cj.com/">Sign up for CJ</a><hr>
		<a href="http://portaljumper.com/widgetmania" target="_blank">Get widgets for other networks ..</a><hr>
		The front end is now showing widgets from shareasale merchant: <font color='red'><?php echo $instance['cjmerch']; ?></font>. Make sure this merchant is part of your campaign in order to
		track clicks and get paid.<hr>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'cjtitle' ); ?>"><?php _e('Widget title:', 'hybrid'); ?></label>
			<input id="<?php echo $this->get_field_id( 'cjtitle' ); ?>" name="<?php echo $this->get_field_name( 'cjtitle' ); ?>" value="<?php echo $instance['cjtitle']; ?>" style="width:40%;" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'cjname' ); ?>"><?php _e('your commission junction ID:', 'cjexample'); ?></label>
			<input id="<?php echo $this->get_field_id( 'cjname' ); ?>" name="<?php echo $this->get_field_name( 'cjname' ); ?>" value="<?php echo $instance['cjname']; ?>" style="width:30%;" />
		    
		</p>
		<p align="center">
		   <label for="<?php echo $this->get_field_id( 'cjmerch' ); ?>"><?php _e('select a commission junction affiliate merchant to advertise:', 'hybrid'); ?></label>
		   <select name="<?php echo $this->get_field_name( 'cjmerch' ); ?>" value="<?php echo $instance['cjmerch']; ?>" style="width:100%;" />
<option value="<?php echo $instance['cjmerch']; ?>"><?php echo $instance['cjmerch']; ?></option>
<option value="Flowers_Across_America-Product_Catalog_1.txt.gz"> 
Flowers_Across_America-Product_Catalog_1.txt.gz</option>
<option value="123Inkjets_com-Product_Catalog_123Inkjets_com.txt.gz">123Inkjets_com-Product_Catalog_123Inkjets_com.txt.gz
</option>
<option value="AllBrands_com-allbrands_com_Product_Catalog.txt.gz">AllBrands_com-allbrands_com_Product_Catalog.txt.gz
</option><option value="All_Ink_com_Associate_Program-All_Ink_com_Product_List.txt.gz">All_Ink_com_Associate_Program-All_Ink_com_Product_List.txt.gz
</option><option value="Allergy_Be_Gone-Allergy_Be_Gone_Product_Catalog.txt.gz">Allergy_Be_Gone-Allergy_Be_Gone_Product_Catalog.txt.gz
</option><option value="AreYouGame_com-Product_Catalog_1.txt.gz">AreYouGame_com-Product_Catalog_1.txt.gz
</option><option value="AutoBarn_com-Product_Catalog_1.txt.gz">AutoBarn_com-Product_Catalog_1.txt.gz
</option><option value="Auto_Parts_Warehouse-APW_Product_Catalog_1.txt.gz">Auto_Parts_Warehouse-APW_Product_Catalog_1.txt.gz
</option><option value="Auto_Parts_Warehouse-Auto_Parts_Train_Product_Catalog.txt.gz">Auto_Parts_Warehouse-Auto_Parts_Train_Product_Catalog.txt.gz
</option><option value="BaronBob_com-Product_Catalog_1.txt.gz">BaronBob_com-Product_Catalog_1.txt.gz
</option><option value="Bellacor_com-Product_Catalog.txt.gz">Bellacor_com-Product_Catalog.txt.gz
</option><option value="BigFitness_net-Product_Catalog_1.txt.gz">BigFitness_net-Product_Catalog_1.txt.gz
</option><option value="BiggerBooks_com-BiggerBooks_com_Product_Catalog.txt.gz">BiggerBooks_com-BiggerBooks_com_Product_Catalog.txt.gz
</option><option value="Bluegala_com_and_alight_com-Bluegala_Product_Catalog.txt.gz">Bluegala_com_and_alight_com-Bluegala_Product_Catalog.txt.gz
</option><option value="Bluegala_com_and_alight_com-alight_Product_Catalog.txt.gz">Bluegala_com_and_alight_com-alight_Product_Catalog.txt.gz
</option><option value="Bonsai_Boy_of_New_York-Product_Catalog_1.txt.gz">Bonsai_Boy_of_New_York-Product_Catalog_1.txt.gz
</option><option value="Bookbyte_com-Product_Catalog.txt.gz">Bookbyte_com-Product_Catalog.txt.gz
</option><option value="Brian_Tracy-Product_Catalog_1.txt.gz">Brian_Tracy-Product_Catalog_1.txt.gz
</option><option value="Candle_Bay-Candle_Bay_Products.txt.gz">Candle_Bay-Candle_Bay_Products.txt.gz
</option><option value="Cell_Phone_Shop-Product_Catalog_1.txt.gz">Cell_Phone_Shop-Product_Catalog_1.txt.gz
</option><option value="CitySights_NY-Product_Catalog.txt.gz">CitySights_NY-Product_Catalog.txt.gz
</option><option value="Cooltan_Tan_Through_Shirts_Swimwear-Product_Catalog_1.txt.gz">Cooltan_Tan_Through_Shirts_Swimwear-Product_Catalog_1.txt.gz
</option><option value="CyberLink_Affiliate_Program-CyberLink_Product_Catalog.txt.gz">CyberLink_Affiliate_Program-CyberLink_Product_Catalog.txt.gz
</option><option value="Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-German_OTC_productfeed.txt.gz">Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-German_OTC_productfeed.txt.gz
</option><option value="Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-Productfeed_italian.txt.gz">Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-Productfeed_italian.txt.gz
</option><option value="Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-dutch_OTC_productfeed.txt.gz">Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-dutch_OTC_productfeed.txt.gz
</option><option value="Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-english_OTC_productfeed_.txt.gz">Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-english_OTC_productfeed_.txt.gz
</option><option value="Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-french_OTC_productfeed.txt.gz">Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-french_OTC_productfeed.txt.gz
</option><option value="Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-productfeed_dutch.txt.gz">Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-productfeed_dutch.txt.gz
</option><option value="Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-productfeed_english.txt.gz">Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-productfeed_english.txt.gz
</option><option value="Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-productfeed_french.txt.gz">Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-productfeed_french.txt.gz
</option><option value="Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-productfeed_german.txt.gz">Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-productfeed_german.txt.gz
</option><option value="Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-productfeed_spanish.txt.gz">Dokteronline_Apotheke_mit_Top_Verdienst_M_glichkeiten-productfeed_spanish.txt.gz
</option><option value="Entertainment_Earth-EntertainmentEarth_com.txt.gz">Entertainment_Earth-EntertainmentEarth_com.txt.gz
</option><option value="EyeSave_Sunglasses-Eyesave_Product_Catalog.txt.gz">EyeSave_Sunglasses-Eyesave_Product_Catalog.txt.gz
</option><option value="FineJewelers_com-Product_Catalog_1.txt.gz">FineJewelers_com-Product_Catalog_1.txt.gz
</option><option value="Flowers_Across_America-Product_Catalog_1.txt.gz">Flowers_Across_America-Product_Catalog_1.txt.gz
</option><option value="Fonts_com-Product_Catalog_1.txt.gz">Fonts_com-Product_Catalog_1.txt.gz
</option><option value="FragranceX_com-FragranceX_com_Australia_Feed.txt.gz">FragranceX_com-FragranceX_com_Australia_Feed.txt.gz
</option><option value="FragranceX_com-FragranceX_com_Canada_Feed.txt.gz">FragranceX_com-FragranceX_com_Canada_Feed.txt.gz
</option><option value="FragranceX_com-FragranceX_com_Euro_Feed.txt.gz">FragranceX_com-FragranceX_com_Euro_Feed.txt.gz
</option><option value="FragranceX_com-FragranceX_com_GBP_UK_Feed.txt.gz">FragranceX_com-FragranceX_com_GBP_UK_Feed.txt.gz
</option><option value="FragranceX_com-FragranceX_com_USA_Feed.txt.gz">FragranceX_com-FragranceX_com_USA_Feed.txt.gz
</option><option value="Gadget_Universe_Share_the_Riches_-Product_Catalog_1.txt.gz">Gadget_Universe_Share_the_Riches_-Product_Catalog_1.txt.gz
</option><option value="Gray_Line_New_York-Gray_Line_Product_Catalog.txt.gz">Gray_Line_New_York-Gray_Line_Product_Catalog.txt.gz
</option><option value="Gta_hotels-City_Catalog.txt.gz">Gta_hotels-City_Catalog.txt.gz
</option><option value="Gta_hotels-Continent_Catalog.txt.gz">Gta_hotels-Continent_Catalog.txt.gz
</option><option value="Gta_hotels-Country_Catalog.txt.gz">Gta_hotels-Country_Catalog.txt.gz
</option><option value="Gta_hotels-Hotel_Catalog.txt.gz">Gta_hotels-Hotel_Catalog.txt.gz
</option><option value="Heavenly_Treasures-Product_Catalog_1.txt.gz">Heavenly_Treasures-Product_Catalog_1.txt.gz
</option><option value="HobbyTron_com-Hobbytron.txt.gz">HobbyTron_com-Hobbytron.txt.gz
</option><option value="Hollywood_Mega_Store-Product_Catalog.txt.gz">Hollywood_Mega_Store-Product_Catalog.txt.gz
</option><option value="Hot_Topic-Product_Catalog.txt.gz">Hot_Topic-Product_Catalog.txt.gz
</option><option value="ITCFonts_com_Affiliate_Program-Product_Catalog_1.txt.gz">ITCFonts_com_Affiliate_Program-Product_Catalog_1.txt.gz
</option><option value="Inkgrabber_com-Inkgrabber_Full_Product_Catalog.txt.gz">Inkgrabber_com-Inkgrabber_Full_Product_Catalog.txt.gz
</option><option value="JustFlowers_com-Just_Flowers_Product_Catalog.txt.gz">JustFlowers_com-Just_Flowers_Product_Catalog.txt.gz
</option><option value="Kalyx_com-Product_Catalog_1.txt.gz">Kalyx_com-Product_Catalog_1.txt.gz
</option><option value="Kaspersky_Lab-Kaspersky_Labs_product_catalog.txt.gz">Kaspersky_Lab-Kaspersky_Labs_product_catalog.txt.gz
</option><option value="Kitchen_Collection_and_Le_Gourmet_Chef-LGC_Product_Catalog.txt.gz">Kitchen_Collection_and_Le_Gourmet_Chef-LGC_Product_Catalog.txt.gz
</option><option value="Kitchen_Collection_and_Le_Gourmet_Chef-Product_Catalog_1.txt.gz">Kitchen_Collection_and_Le_Gourmet_Chef-Product_Catalog_1.txt.gz
</option><option value="LA_to_your_door-LA_To_Your_Door_Product_Catalog.txt.gz">LA_to_your_door-LA_To_Your_Door_Product_Catalog.txt.gz
</option><option value="Laptops_For_Less-Affiliate_Product_Catalog.txt.gz">Laptops_For_Less-Affiliate_Product_Catalog.txt.gz
</option><option value="Lorex_Home_Office_Security_Solutions-Lorex_Product_Catalog.txt.gz">Lorex_Home_Office_Security_Solutions-Lorex_Product_Catalog.txt.gz
</option><option value="Love_Scent_Pheromone-Product_Catalog.txt.gz">Love_Scent_Pheromone-Product_Catalog.txt.gz
</option><option value="Made_in_Firenze_Art_Craft_Food_FLORENCE_ITALY-Product_Catalog_1.txt.gz">Made_in_Firenze_Art_Craft_Food_FLORENCE_ITALY-Product_Catalog_1.txt.gz
</option><option value="MagMall_com_subscription_savings_on_1_000_s_of_magazines-Magazine_Subscription_Catalog.txt.gz">MagMall_com_subscription_savings_on_1_000_s_of_magazines-Magazine_Subscription_Catalog.txt.gz
</option><option value="Maps_com-Product_Catalog.txt.gz">Maps_com-Product_Catalog.txt.gz
</option><option value="Maps_com-Top_100_Products.txt.gz">Maps_com-Top_100_Products.txt.gz
</option><option value="MisterArt_com-Product_Catalog_1.txt.gz">MisterArt_com-Product_Catalog_1.txt.gz
</option><option value="Online_TEFL_course-Product_Feed.txt.gz">Online_TEFL_course-Product_Feed.txt.gz
</option><option value="PIXMANIA_DK-Pixmania_DK_Product_Catalogue.txt.gz">PIXMANIA_DK-Pixmania_DK_Product_Catalogue.txt.gz
</option><option value="Parallels-Product_Catalog.txt.gz">Parallels-Product_Catalog.txt.gz
</option><option value="Perfume_Emporium-Product_Catalog_1.txt.gz">Perfume_Emporium-Product_Catalog_1.txt.gz
</option><option value="Petscriptions_com-Petscriptions_com_Product_Catalog.txt.gz">Petscriptions_com-Petscriptions_com_Product_Catalog.txt.gz
</option><option value="Princeton_Watches-Princeton_Watches_Product_Catalog.txt.gz">Princeton_Watches-Princeton_Watches_Product_Catalog.txt.gz
</option><option value="PrintRunner_com-Product_Catalog.txt.gz">PrintRunner_com-Product_Catalog.txt.gz
</option><option value="Pro_Sports_Memorabilia-Product_Catalog_1.txt.gz">Pro_Sports_Memorabilia-Product_Catalog_1.txt.gz
</option><option value="Raffaello_Ties-Our_Full_Product_Catalog.txt.gz">Raffaello_Ties-Our_Full_Product_Catalog.txt.gz
</option><option value="Rail_Europe-Rail_Europe_Product_Catalog.txt.gz">Rail_Europe-Rail_Europe_Product_Catalog.txt.gz
</option><option value="Register_com-Register_com_Product_Catalog.txt.gz">Register_com-Register_com_Product_Catalog.txt.gz
</option><option value="Robeez_Footwear_Ltd_-Robeez_Data_Feed.txt.gz">Robeez_Footwear_Ltd_-Robeez_Data_Feed.txt.gz
</option><option value="Robeez_Footwear_Ltd_-UK_Robeez_Data_Feed.txt.gz">Robeez_Footwear_Ltd_-UK_Robeez_Data_Feed.txt.gz
</option><option value="SerenityHealth-Product_Catalog_1.txt.gz">SerenityHealth-Product_Catalog_1.txt.gz
</option><option value="Silk_n_SensEpil-Silk_n_SensEpil_Product_Catalog.txt.gz">Silk_n_SensEpil-Silk_n_SensEpil_Product_Catalog.txt.gz
</option><option value="SitStay_com-Product_Catalog_1.txt.gz">SitStay_com-Product_Catalog_1.txt.gz
</option><option value="Socrates_Media_LLC-Product_Catalog_1.txt.gz">Socrates_Media_LLC-Product_Catalog_1.txt.gz
</option><option value="Spotmau_PowerSuite-Spotmau_Product_Catalog.txt.gz">Spotmau_PowerSuite-Spotmau_Product_Catalog.txt.gz
</option><option value="Tankless_Water_Heaters_by_Low_Energy_Systems-Product_Catalog_1.txt.gz">Tankless_Water_Heaters_by_Low_Energy_Systems-Product_Catalog_1.txt.gz
</option><option value="Teacher_Created_Resources-TCR_Product_Catalog.txt.gz">Teacher_Created_Resources-TCR_Product_Catalog.txt.gz
</option><option value="Testclear_com-Product_Catalog_1.txt.gz">Testclear_com-Product_Catalog_1.txt.gz
</option><option value="The_Bradford_Exchange_Online-Christmas_Items.txt.gz">The_Bradford_Exchange_Online-Christmas_Items.txt.gz
</option><option value="The_Bradford_Exchange_Online-Collectibles_Today_Canada.txt.gz">The_Bradford_Exchange_Online-Collectibles_Today_Canada.txt.gz
</option><option value="The_Bradford_Exchange_Online-Figurines.txt.gz">The_Bradford_Exchange_Online-Figurines.txt.gz
</option><option value="The_Bradford_Exchange_Online-Special_Offers.txt.gz">The_Bradford_Exchange_Online-Special_Offers.txt.gz
</option><option value="The_Bradford_Exchange_Online-Subscription_Plans.txt.gz">The_Bradford_Exchange_Online-Subscription_Plans.txt.gz
</option><option value="The_Bradford_Exchange_Online-The_Bradford_Exchange_Online_Product_Catalog.txt.gz">The_Bradford_Exchange_Online-The_Bradford_Exchange_Online_Product_Catalog.txt.gz
</option><option value="The_Bradford_Exchange_Online-Top_50_Products.txt.gz">The_Bradford_Exchange_Online-Top_50_Products.txt.gz
</option><option value="The_Space_Store-Product_Catalog.txt.gz">The_Space_Store-Product_Catalog.txt.gz
</option><option value="Virility_Health-Product_Catalog_1.txt.gz">Virility_Health-Product_Catalog_1.txt.gz
</option><option value="Watchzone_com-Wristwatch_Data_Feed.txt.gz">Watchzone_com-Wristwatch_Data_Feed.txt.gz
</option><option value="WebUndies_com-Product_Catalog_1.txt.gz">WebUndies_com-Product_Catalog_1.txt.gz
</option><option value="WildAttire-Neckties_com_Product_Catalog.txt.gz">WildAttire-Neckties_com_Product_Catalog.txt.gz
</option><option value="WildAttire-Ties_com_Product_Catalog.txt.gz">WildAttire-Ties_com_Product_Catalog.txt.gz
</option><option value="Willygoat_Inc_-Catalog.txt.gz">Willygoat_Inc_-Catalog.txt.gz
</option><option value="WuWearShoes_com-Product_Catalog_1.txt.gz">WuWearShoes_com-Product_Catalog_1.txt.gz
</option><option value="YLighting-Product_Catalog.txt.gz">YLighting-Product_Catalog.txt.gz
</option><option value="bloomingbulb_com-Product_Catalog_1.txt.gz">bloomingbulb_com-Product_Catalog_1.txt.gz
</option><option value="costumeman-Product_Catalog.txt.gz">costumeman-Product_Catalog.txt.gz
</option><option value="eBatts_com-Product_Catalog.txt.gz">eBatts_com-Product_Catalog.txt.gz
</option><option value="eBooks_com-Product_Catalog.txt.gz">eBooks_com-Product_Catalog.txt.gz
</option><option value="eCampus_com-Textbooks_only.txt.gz">eCampus_com-Textbooks_only.txt.gz
</option><option value="eCampus_com-Top_Products_Feed.txt.gz">eCampus_com-Top_Products_Feed.txt.gz
</option><option value="eCampus_com-eCampus_Buyback_feed.txt.gz">eCampus_com-eCampus_Buyback_feed.txt.gz
</option><option value="eCampus_com-eCampus_Catalog_Apparel.txt.gz">eCampus_com-eCampus_Catalog_Apparel.txt.gz
</option><option value="eHarlequin_com-Carina_Press.txt.gz">eHarlequin_com-Carina_Press.txt.gz
</option><option value="eHarlequin_com-eHarlequin_com_Product_Catalog.txt.gz">eHarlequin_com-eHarlequin_com_Product_Catalog.txt.gz
</option><option value="eVitamins-Product_Catalog_1.txt.gz">eVitamins-Product_Catalog_1.txt.gz
</option><option value="universalgear_com-Universal_Gear_Products.txt.gz">universalgear_com-Universal_Gear_Products.txt.gz
</option><option value="www_alwaysforme_com-Product_Catalog_1.txt.gz">www_alwaysforme_com-Product_Catalog_1.txt.gz
</option><option value="zChocolat_com-feed.txt.gz">zChocolat_com-feed.txt.gz
</option>
</select><br>
</p>
<p align="center"><small><a href="http://portaljumper.com/upgrade">upgrade & go premium</a></small></p>
<p align="center">Here is a live example of the widget you created !<br>
<iframe src="http://portaljumper.com/cjshops/index.php?merchantid=<?php echo $instance['cjmerch']; ?>&columns=1&picwidth=160&showcount=1&myid=<?php echo $instance['cjname']; ?>&layout=C&pick=random&grid=on&panel=hide" width="200" Height="200" scrolling=no frameborder=0>portaljumper.com embedding the worlds media</iframe>
<br>You must reload the page in your browser to select another merchant

</p>
<p align="center"><small><a href="http://portaljumper.com/upgrade">upgrade & go premium</a></small></p>	
<hr>
<p align="center"><small><a href="http://portaljumper.com/upgrade">This plugin is offered free of charge. Some limitations may apply. Read more ...</a></small></p>			 
<hr>
<a href="http://portaljumper.com/merchants/"><small>I am a merchant that provides feeds ...</small></a>
	<?php
	}
}
// visit http://owagu.com for more information
?>