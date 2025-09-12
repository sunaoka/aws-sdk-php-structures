<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputLocationRef $Destination
 * @property MediaPackageV2GroupSettings|null $MediapackageV2GroupSettings
 */
class MediaPackageGroupSettings extends Shape
{
    /**
     * @param array{
     *     Destination: OutputLocationRef,
     *     MediapackageV2GroupSettings?: MediaPackageV2GroupSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
