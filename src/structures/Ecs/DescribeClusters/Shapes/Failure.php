<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $reason
 * @property string $detail
 */
class Failure extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     reason?: string,
     *     detail?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
