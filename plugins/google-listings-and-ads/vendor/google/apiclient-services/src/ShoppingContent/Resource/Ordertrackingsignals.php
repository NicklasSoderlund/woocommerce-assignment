<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent\Resource;

use Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent\OrderTrackingSignal;

/**
 * The "ordertrackingsignals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google\Service\ShoppingContent(...);
 *   $ordertrackingsignals = $contentService->ordertrackingsignals;
 *  </code>
 */
class Ordertrackingsignals extends \Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\Resource
{
  /**
   * Creates new order tracking signal. (ordertrackingsignals.create)
   *
   * @param string $merchantId The ID of the merchant for which the order signal
   * is created.
   * @param OrderTrackingSignal $postBody
   * @param array $optParams Optional parameters.
   * @return OrderTrackingSignal
   */
  public function create($merchantId, OrderTrackingSignal $postBody, $optParams = [])
  {
    $params = ['merchantId' => $merchantId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], OrderTrackingSignal::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Ordertrackingsignals::class, 'Google_Service_ShoppingContent_Resource_Ordertrackingsignals');
