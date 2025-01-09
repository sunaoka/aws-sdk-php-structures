<?php

namespace Sunaoka\Aws\Structures\Outposts\ListAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceType
 * @property int $Count
 */
class AssetInstanceTypeCapacity extends Shape
{
    /**
     * @param array{
     *     InstanceType: string,
     *     Count: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
