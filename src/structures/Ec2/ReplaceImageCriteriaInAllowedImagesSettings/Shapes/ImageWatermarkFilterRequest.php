<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceImageCriteriaInAllowedImagesSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WatermarkKey
 * @property string|null $SourceImageRegion
 * @property int|null $MaximumDaysSinceSourceImageCreated
 * @property int|null $MaximumDaysSinceWatermarkCreated
 */
class ImageWatermarkFilterRequest extends Shape
{
    /**
     * @param array{
     *     WatermarkKey?: string|null,
     *     SourceImageRegion?: string|null,
     *     MaximumDaysSinceSourceImageCreated?: int|null,
     *     MaximumDaysSinceWatermarkCreated?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
