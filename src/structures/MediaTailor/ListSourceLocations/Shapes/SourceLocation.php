<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListSourceLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessConfiguration $AccessConfiguration
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property DefaultSegmentDeliveryConfiguration $DefaultSegmentDeliveryConfiguration
 * @property HttpConfiguration $HttpConfiguration
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property list<SegmentDeliveryConfiguration> $SegmentDeliveryConfigurations
 * @property string $SourceLocationName
 * @property array<string, string> $Tags
 */
class SourceLocation extends Shape
{
    /**
     * @param array{
     *     AccessConfiguration?: AccessConfiguration,
     *     Arn: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     DefaultSegmentDeliveryConfiguration?: DefaultSegmentDeliveryConfiguration,
     *     HttpConfiguration: HttpConfiguration,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     SegmentDeliveryConfigurations?: list<SegmentDeliveryConfiguration>,
     *     SourceLocationName: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
