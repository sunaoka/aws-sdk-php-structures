<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $detailsMap
 */
class JobExecutionStatusDetails extends Shape
{
    /**
     * @param array{detailsMap?: array<string, string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
