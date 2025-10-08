<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\StartFlowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property string $flowAliasIdentifier
 * @property string|null $flowExecutionName
 * @property list<Shapes\FlowInput> $inputs
 * @property Shapes\ModelPerformanceConfiguration|null $modelPerformanceConfiguration
 */
class StartFlowExecutionRequest extends Request
{
    /**
     * @param array{
     *     flowIdentifier: string,
     *     flowAliasIdentifier: string,
     *     flowExecutionName?: string|null,
     *     inputs: list<Shapes\FlowInput>,
     *     modelPerformanceConfiguration?: Shapes\ModelPerformanceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
