<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessRemoteMcpConfig|null $remoteMcp
 * @property HarnessAgentCoreBrowserConfig|null $agentCoreBrowser
 * @property HarnessAgentCoreGatewayConfig|null $agentCoreGateway
 * @property HarnessInlineFunctionConfig|null $inlineFunction
 * @property HarnessAgentCoreCodeInterpreterConfig|null $agentCoreCodeInterpreter
 */
class HarnessToolConfiguration extends Shape
{
    /**
     * @param array{
     *     remoteMcp?: HarnessRemoteMcpConfig|null,
     *     agentCoreBrowser?: HarnessAgentCoreBrowserConfig|null,
     *     agentCoreGateway?: HarnessAgentCoreGatewayConfig|null,
     *     inlineFunction?: HarnessInlineFunctionConfig|null,
     *     agentCoreCodeInterpreter?: HarnessAgentCoreCodeInterpreterConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
