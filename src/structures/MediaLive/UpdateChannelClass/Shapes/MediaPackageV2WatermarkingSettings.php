<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MediaPackageV2AbWatermarkerIrdetoSettings|null $MediaPackageV2AbWatermarkerIrdetoSettings
 */
class MediaPackageV2WatermarkingSettings extends Shape
{
    /**
     * @param array{MediaPackageV2AbWatermarkerIrdetoSettings?: MediaPackageV2AbWatermarkerIrdetoSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
