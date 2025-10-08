<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 */
class GetAutomatedReasoningPolicyRequest extends Request
{
    /**
     * @param array{policyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
