<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StepId
 * @property string $StepAlias
 */
class StepAliasMapping extends Shape
{
    /**
     * @param array{
     *     StepId: string,
     *     StepAlias: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
