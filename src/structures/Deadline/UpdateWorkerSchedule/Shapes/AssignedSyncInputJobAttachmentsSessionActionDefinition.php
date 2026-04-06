<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stepId
 */
class AssignedSyncInputJobAttachmentsSessionActionDefinition extends Shape
{
    /**
     * @param array{stepId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
