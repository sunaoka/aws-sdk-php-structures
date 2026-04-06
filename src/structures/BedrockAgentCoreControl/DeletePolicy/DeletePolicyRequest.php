<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeletePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyEngineId
 * @property string $policyId
 */
class DeletePolicyRequest extends Request
{
    /**
     * @param array{
     *     policyEngineId: string,
     *     policyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
