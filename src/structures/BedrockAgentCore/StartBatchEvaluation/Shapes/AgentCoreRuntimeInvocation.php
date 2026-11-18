<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentRuntimeEndpointArn
 * @property string|null $requestTemplate
 */
class AgentCoreRuntimeInvocation extends Shape
{
    /**
     * @param array{
     *     agentRuntimeEndpointArn: string,
     *     requestTemplate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
