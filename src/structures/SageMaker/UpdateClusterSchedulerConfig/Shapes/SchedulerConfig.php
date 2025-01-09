<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateClusterSchedulerConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PriorityClass> $PriorityClasses
 * @property 'Enabled'|'Disabled' $FairShare
 */
class SchedulerConfig extends Shape
{
    /**
     * @param array{
     *     PriorityClasses?: list<PriorityClass>,
     *     FairShare?: 'Enabled'|'Disabled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
