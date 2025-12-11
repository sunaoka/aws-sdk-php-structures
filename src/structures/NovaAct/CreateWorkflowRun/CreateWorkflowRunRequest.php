<?php

namespace Sunaoka\Aws\Structures\NovaAct\CreateWorkflowRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowDefinitionName
 * @property string $modelId
 * @property string|null $clientToken
 * @property string|null $logGroupName
 * @property Shapes\ClientInfo $clientInfo
 */
class CreateWorkflowRunRequest extends Request
{
    /**
     * @param array{
     *     workflowDefinitionName: string,
     *     modelId: string,
     *     clientToken?: string|null,
     *     logGroupName?: string|null,
     *     clientInfo: Shapes\ClientInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
