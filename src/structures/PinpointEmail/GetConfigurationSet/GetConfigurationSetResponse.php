<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetConfigurationSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ConfigurationSetName
 * @property Shapes\TrackingOptions $TrackingOptions
 * @property Shapes\DeliveryOptions $DeliveryOptions
 * @property Shapes\ReputationOptions $ReputationOptions
 * @property Shapes\SendingOptions $SendingOptions
 * @property list<Shapes\Tag> $Tags
 */
class GetConfigurationSetResponse extends Response
{
}
