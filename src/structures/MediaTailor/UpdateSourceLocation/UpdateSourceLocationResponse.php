<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateSourceLocation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\AccessConfiguration $AccessConfiguration
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\DefaultSegmentDeliveryConfiguration $DefaultSegmentDeliveryConfiguration
 * @property Shapes\HttpConfiguration $HttpConfiguration
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property list<Shapes\SegmentDeliveryConfiguration> $SegmentDeliveryConfigurations
 * @property string $SourceLocationName
 * @property array<string, string> $Tags
 */
class UpdateSourceLocationResponse extends Response
{
}
