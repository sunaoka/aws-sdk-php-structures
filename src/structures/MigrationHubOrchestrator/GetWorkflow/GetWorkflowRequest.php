<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetWorkflowRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
