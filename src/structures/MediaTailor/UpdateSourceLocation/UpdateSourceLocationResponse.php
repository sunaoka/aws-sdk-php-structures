<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateSourceLocation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\AccessConfiguration|null $AccessConfiguration
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\DefaultSegmentDeliveryConfiguration|null $DefaultSegmentDeliveryConfiguration
 * @property Shapes\HttpConfiguration|null $HttpConfiguration
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property list<Shapes\SegmentDeliveryConfiguration>|null $SegmentDeliveryConfigurations
 * @property string|null $SourceLocationName
 * @property array<string, string>|null $Tags
 */
class UpdateSourceLocationResponse extends Response
{
}
