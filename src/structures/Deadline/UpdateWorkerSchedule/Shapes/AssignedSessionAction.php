<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionActionId
 * @property AssignedSessionActionDefinition $definition
 */
class AssignedSessionAction extends Shape
{
    /**
     * @param array{
     *     sessionActionId: string,
     *     definition: AssignedSessionActionDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
