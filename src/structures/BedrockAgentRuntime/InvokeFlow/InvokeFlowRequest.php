<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property string $flowAliasIdentifier
 * @property list<Shapes\FlowInput> $inputs
 * @property bool|null $enableTrace
 * @property Shapes\ModelPerformanceConfiguration|null $modelPerformanceConfiguration
 * @property string|null $executionId
 */
class InvokeFlowRequest extends Request
{
    /**
     * @param array{
     *     flowIdentifier: string,
     *     flowAliasIdentifier: string,
     *     inputs: list<Shapes\FlowInput>,
     *     enableTrace?: bool|null,
     *     modelPerformanceConfiguration?: Shapes\ModelPerformanceConfiguration|null,
     *     executionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
