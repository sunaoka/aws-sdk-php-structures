<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeConfigurationSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ConfigurationSet $ConfigurationSet
 * @property list<Shapes\EventDestination> $EventDestinations
 * @property Shapes\TrackingOptions $TrackingOptions
 * @property Shapes\DeliveryOptions $DeliveryOptions
 * @property Shapes\ReputationOptions $ReputationOptions
 */
class DescribeConfigurationSetResponse extends Response
{
}
