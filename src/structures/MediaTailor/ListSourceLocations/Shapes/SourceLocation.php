<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListSourceLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessConfiguration|null $AccessConfiguration
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property DefaultSegmentDeliveryConfiguration|null $DefaultSegmentDeliveryConfiguration
 * @property HttpConfiguration $HttpConfiguration
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property list<SegmentDeliveryConfiguration>|null $SegmentDeliveryConfigurations
 * @property string $SourceLocationName
 * @property array<string, string>|null $Tags
 */
class SourceLocation extends Shape
{
    /**
     * @param array{
     *     AccessConfiguration?: AccessConfiguration|null,
     *     Arn: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     DefaultSegmentDeliveryConfiguration?: DefaultSegmentDeliveryConfiguration|null,
     *     HttpConfiguration: HttpConfiguration,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     SegmentDeliveryConfigurations?: list<SegmentDeliveryConfiguration>|null,
     *     SourceLocationName: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
