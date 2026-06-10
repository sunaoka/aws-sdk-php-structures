<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceImageMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WatermarkKey
 * @property string|null $SourceImageRegion
 * @property string|null $SourceImageId
 * @property \Aws\Api\DateTimeResult|null $SourceImageCreationTime
 * @property \Aws\Api\DateTimeResult|null $WatermarkCreationTime
 */
class ImageWatermark extends Shape
{
    /**
     * @param array{
     *     WatermarkKey?: string|null,
     *     SourceImageRegion?: string|null,
     *     SourceImageId?: string|null,
     *     SourceImageCreationTime?: \Aws\Api\DateTimeResult|null,
     *     WatermarkCreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
