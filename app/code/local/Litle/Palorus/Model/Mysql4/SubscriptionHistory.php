<?php

  class Litle_Palorus_Model_Mysql4_SubscriptionHistory extends Mage_Core_Model_Mysql4_Abstract
  {
      protected function _construct()
      {
          $this->_init('palorus/subscription_history', 'subscription_history_id');
      }
  }