<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $enableTrace
 * @property string $flowAliasIdentifier
 * @property string $flowIdentifier
 * @property list<Shapes\FlowInput> $inputs
 * @property Shapes\ModelPerformanceConfiguration|null $modelPerformanceConfiguration
 */
class InvokeFlowRequest extends Request
{
    /**
     * @param array{
     *     enableTrace?: bool|null,
     *     flowAliasIdentifier: string,
     *     flowIdentifier: string,
     *     inputs: list<Shapes\FlowInput>,
     *     modelPerformanceConfiguration?: Shapes\ModelPerformanceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
