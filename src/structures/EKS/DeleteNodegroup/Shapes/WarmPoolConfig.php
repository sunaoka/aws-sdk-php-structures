<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property int<0, max>|null $minSize
 * @property int|null $maxGroupPreparedCapacity
 * @property 'STOPPED'|'RUNNING'|'HIBERNATED'|null $poolState
 * @property bool|null $reuseOnScaleIn
 */
class WarmPoolConfig extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     minSize?: int<0, max>|null,
     *     maxGroupPreparedCapacity?: int|null,
     *     poolState?: 'STOPPED'|'RUNNING'|'HIBERNATED'|null,
     *     reuseOnScaleIn?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
