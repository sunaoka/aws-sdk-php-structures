<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPlaybackConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClientSideBeaconingConfiguration|null $ClientSide
 */
class BeaconingConfiguration extends Shape
{
    /**
     * @param array{ClientSide?: ClientSideBeaconingConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
