<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Desired
 * @property int|null $Running
 * @property int|null $InUse
 * @property int|null $Available
 */
class ComputeCapacityStatus extends Shape
{
    /**
     * @param array{
     *     Desired: int,
     *     Running?: int|null,
     *     InUse?: int|null,
     *     Available?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
