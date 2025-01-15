<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateContainerInstancesState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $reason
 * @property string|null $detail
 */
class Failure extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     reason?: string|null,
     *     detail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
