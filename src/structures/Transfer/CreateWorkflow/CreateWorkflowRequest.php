<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property list<Shapes\WorkflowStep> $Steps
 * @property list<Shapes\WorkflowStep> $OnExceptionSteps
 * @property list<Shapes\Tag> $Tags
 */
class CreateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     Steps: list<Shapes\WorkflowStep>,
     *     OnExceptionSteps?: list<Shapes\WorkflowStep>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
