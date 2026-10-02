<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property list<Shapes\WorkflowStep> $Steps
 * @property list<Shapes\WorkflowStep>|null $OnExceptionSteps
 * @property list<Shapes\Tag>|null $Tags
 * @property list<string>|null $StructuredLogDestinations
 */
class CreateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Steps: list<Shapes\WorkflowStep>,
     *     OnExceptionSteps?: list<Shapes\WorkflowStep>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     StructuredLogDestinations?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
