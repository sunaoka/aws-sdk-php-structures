<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\UpdateWorkflowStepGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowId
 * @property string $id
 * @property string|null $name
 * @property string|null $description
 * @property list<string>|null $next
 * @property list<string>|null $previous
 */
class UpdateWorkflowStepGroupRequest extends Request
{
    /**
     * @param array{
     *     workflowId: string,
     *     id: string,
     *     name?: string|null,
     *     description?: string|null,
     *     next?: list<string>|null,
     *     previous?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
