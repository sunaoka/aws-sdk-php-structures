<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicyEngine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyEngineId
 */
class GetPolicyEngineRequest extends Request
{
    /**
     * @param array{policyEngineId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
