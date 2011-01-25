<?php
class PiwikAnalytics extends DataObjectDecorator
{
        function extraStatics(){
                return array(
                        'db' => array(
                                'PiwikAnalyticsUrlServer' => 'Text',
                				'PiwikAnalyticsAccountID' => 'Int'
                        )
                );
        }
         
        public function updateCMSFields(FieldSet &$fields) {
                $fields->addFieldToTab('Root.Piwik', new TextField('PiwikAnalyticsUrlServer', 'Piwik Analytics Url Server (http://...)'));
                $fields->addFieldToTab('Root.Piwik', new NumericField('PiwikAnalyticsAccountID', 'Piwik Analytics Id domain'));
        }
         
        function contentControllerInit($controller) {
        }
         
}