<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'NotStarted'|'InProgress'|'Completed'|'Failed' $Status
 * @property string|null $FailureReason
 */
class AlgorithmStatusItem extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Status: 'NotStarted'|'InProgress'|'Completed'|'Failed',
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
