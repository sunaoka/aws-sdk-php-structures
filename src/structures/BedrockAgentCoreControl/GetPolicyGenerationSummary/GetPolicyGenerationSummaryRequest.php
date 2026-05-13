<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicyGenerationSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyGenerationId
 * @property string $policyEngineId
 */
class GetPolicyGenerationSummaryRequest extends Request
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
