<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Successful'|'Failed'|'InProgress' $Status
 * @property string $FailureReason
 */
class LastUpdateStatus extends Shape
{
    /**
     * @param array{
     *     Status: 'Successful'|'Failed'|'InProgress',
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
