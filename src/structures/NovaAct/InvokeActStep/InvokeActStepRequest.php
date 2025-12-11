<?php

namespace Sunaoka\Aws\Structures\NovaAct\InvokeActStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowDefinitionName
 * @property string $workflowRunId
 * @property string $sessionId
 * @property string $actId
 * @property list<Shapes\CallResult> $callResults
 * @property string|null $previousStepId
 */
class InvokeActStepRequest extends Request
{
    /**
     * @param array{
     *     workflowDefinitionName: string,
     *     workflowRunId: string,
     *     sessionId: string,
     *     actId: string,
     *     callResults: list<Shapes\CallResult>,
     *     previousStepId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
