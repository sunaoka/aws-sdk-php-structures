<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Successful'|'Failed'|'InProgress' $Status
 * @property string|null $FailureReason
 */
class LastUpdateStatus extends Shape
{
    /**
     * @param array{
     *     Status: 'Successful'|'Failed'|'InProgress',
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
