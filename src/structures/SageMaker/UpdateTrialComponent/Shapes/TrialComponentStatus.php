<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrialComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $PrimaryStatus
 * @property string $Message
 */
class TrialComponentStatus extends Shape
{
    /**
     * @param array{
     *     PrimaryStatus?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
