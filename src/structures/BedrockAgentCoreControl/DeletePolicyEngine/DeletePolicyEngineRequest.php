<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeletePolicyEngine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyEngineId
 */
class DeletePolicyEngineRequest extends Request
{
    /**
     * @param array{policyEngineId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
