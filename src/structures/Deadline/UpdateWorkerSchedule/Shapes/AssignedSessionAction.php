<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssignedSessionActionDefinition $definition
 * @property string $sessionActionId
 */
class AssignedSessionAction extends Shape
{
    /**
     * @param array{
     *     definition: AssignedSessionActionDefinition,
     *     sessionActionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
