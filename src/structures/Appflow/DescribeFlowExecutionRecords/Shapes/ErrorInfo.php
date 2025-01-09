<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlowExecutionRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $putFailuresCount
 * @property string $executionMessage
 */
class ErrorInfo extends Shape
{
    /**
     * @param array{
     *     putFailuresCount?: int,
     *     executionMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
