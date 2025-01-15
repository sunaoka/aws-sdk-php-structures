<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetConfigurationSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ConfigurationSetName
 * @property Shapes\TrackingOptions|null $TrackingOptions
 * @property Shapes\DeliveryOptions|null $DeliveryOptions
 * @property Shapes\ReputationOptions|null $ReputationOptions
 * @property Shapes\SendingOptions|null $SendingOptions
 * @property list<Shapes\Tag>|null $Tags
 */
class GetConfigurationSetResponse extends Response
{
}
