<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicyGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyGenerationId
 * @property string $policyEngineId
 */
class GetPolicyGenerationRequest extends Request
{
    /**
     * @param array{
     *     policyGenerationId: string,
     *     policyEngineId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
