<?php

namespace Sunaoka\Aws\Structures\Deadline\ListStepDependencies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stepId
 * @property 'RESOLVED'|'UNRESOLVED' $status
 */
class StepDependency extends Shape
{
    /**
     * @param array{
     *     stepId: string,
     *     status: 'RESOLVED'|'UNRESOLVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
