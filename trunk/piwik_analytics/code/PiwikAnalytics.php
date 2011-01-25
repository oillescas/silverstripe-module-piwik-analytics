<?php
class PiwikAnalytics extends DataObjectDecorator
{
        function extraStatics(){
                return array(
                        'db' => array(
                                'PiwikAnalyticsUrlServer' => 'Text',
                				'PiwikAnalyticsAccountID' => 'Text'
                        )
                );
        }
         
        public function updateCMSFields(FieldSet &$fields) {
                $fields->addFieldToTab('Root.Main', new TextField('PiwikAnalyticsUrlServer', 'Piwik Analytics Url Server', ''));
                $fields->addFieldToTab('Root.Main', new TextField('PiwikAnalyticsAccountID', 'Piwik Analytics Id domain', ''));
        }
         
        function contentControllerInit($controller) {
        }
         
}