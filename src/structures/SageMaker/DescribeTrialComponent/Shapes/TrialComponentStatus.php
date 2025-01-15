<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrialComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null $PrimaryStatus
 * @property string|null $Message
 */
class TrialComponentStatus extends Shape
{
    /**
     * @param array{
     *     PrimaryStatus?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
