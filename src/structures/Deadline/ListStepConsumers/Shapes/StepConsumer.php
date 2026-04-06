<?php

namespace Sunaoka\Aws\Structures\Deadline\ListStepConsumers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOLVED'|'UNRESOLVED' $status
 * @property string $stepId
 */
class StepConsumer extends Shape
{
    /**
     * @param array{
     *     status: 'RESOLVED'|'UNRESOLVED',
     *     stepId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
