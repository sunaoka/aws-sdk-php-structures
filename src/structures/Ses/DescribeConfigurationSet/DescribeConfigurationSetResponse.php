<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeConfigurationSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ConfigurationSet|null $ConfigurationSet
 * @property list<Shapes\EventDestination>|null $EventDestinations
 * @property Shapes\TrackingOptions|null $TrackingOptions
 * @property Shapes\DeliveryOptions|null $DeliveryOptions
 * @property Shapes\ReputationOptions|null $ReputationOptions
 */
class DescribeConfigurationSetResponse extends Response
{
}
