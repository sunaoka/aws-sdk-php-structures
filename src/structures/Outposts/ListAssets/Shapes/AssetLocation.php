<?php

namespace Sunaoka\Aws\Structures\Outposts\ListAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $RackElevation
 */
class AssetLocation extends Shape
{
    /**
     * @param array{RackElevation?: float|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
