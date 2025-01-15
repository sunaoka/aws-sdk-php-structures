<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateWorkflowStepGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowId
 * @property string $name
 * @property string|null $description
 * @property list<string>|null $next
 * @property list<string>|null $previous
 */
class CreateWorkflowStepGroupRequest extends Request
{
    /**
     * @param array{
     *     workflowId: string,
     *     name: string,
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
