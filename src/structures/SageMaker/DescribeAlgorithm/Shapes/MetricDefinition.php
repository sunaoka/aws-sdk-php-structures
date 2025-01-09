<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Regex
 */
class MetricDefinition extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Regex: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
