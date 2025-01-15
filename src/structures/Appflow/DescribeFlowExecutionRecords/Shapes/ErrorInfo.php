<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlowExecutionRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $putFailuresCount
 * @property string|null $executionMessage
 */
class ErrorInfo extends Shape
{
    /**
     * @param array{
     *     putFailuresCount?: int|null,
     *     executionMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
