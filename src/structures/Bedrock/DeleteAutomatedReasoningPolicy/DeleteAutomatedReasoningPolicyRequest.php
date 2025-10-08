<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteAutomatedReasoningPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 */
class DeleteAutomatedReasoningPolicyRequest extends Request
{
    /**
     * @param array{policyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
