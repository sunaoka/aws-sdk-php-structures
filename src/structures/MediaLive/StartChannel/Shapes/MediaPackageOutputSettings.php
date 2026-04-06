<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MediaPackageV2DestinationSettings|null $MediaPackageV2DestinationSettings
 */
class MediaPackageOutputSettings extends Shape
{
    /**
     * @param array{MediaPackageV2DestinationSettings?: MediaPackageV2DestinationSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
