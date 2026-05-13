<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicyEngineSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyEngineId
 */
class GetPolicyEngineSummaryRequest extends Request
{
    /**
     * @param array{policyEngineId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
