<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\UpdateWorkflowStepGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowId
 * @property string $id
 * @property string $name
 * @property string $description
 * @property list<string> $next
 * @property list<string> $previous
 */
class UpdateWorkflowStepGroupRequest extends Request
{
    /**
     * @param array{
     *     workflowId: string,
     *     id: string,
     *     name?: string,
     *     description?: string,
     *     next?: list<string>,
     *     previous?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
