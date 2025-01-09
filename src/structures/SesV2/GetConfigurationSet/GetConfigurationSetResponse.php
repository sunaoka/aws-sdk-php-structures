<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ConfigurationSetName
 * @property Shapes\TrackingOptions $TrackingOptions
 * @property Shapes\DeliveryOptions $DeliveryOptions
 * @property Shapes\ReputationOptions $ReputationOptions
 * @property Shapes\SendingOptions $SendingOptions
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\SuppressionOptions $SuppressionOptions
 * @property Shapes\VdmOptions $VdmOptions
 */
class GetConfigurationSetResponse extends Response
{
}
