<?php

namespace Sunaoka\Aws\Structures\NovaAct\CreateAct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowDefinitionName
 * @property string $workflowRunId
 * @property string $sessionId
 * @property string $task
 * @property list<Shapes\ToolSpec>|null $toolSpecs
 * @property string|null $clientToken
 */
class CreateActRequest extends Request
{
    /**
     * @param array{
     *     workflowDefinitionName: string,
     *     workflowRunId: string,
     *     sessionId: string,
     *     task: string,
     *     toolSpecs?: list<Shapes\ToolSpec>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
