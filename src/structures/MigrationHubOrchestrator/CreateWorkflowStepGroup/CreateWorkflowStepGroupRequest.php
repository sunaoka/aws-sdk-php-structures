<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateWorkflowStepGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowId
 * @property string $name
 * @property string $description
 * @property list<string> $next
 * @property list<string> $previous
 */
class CreateWorkflowStepGroupRequest extends Request
{
    /**
     * @param array{
     *     workflowId: string,
     *     name: string,
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
