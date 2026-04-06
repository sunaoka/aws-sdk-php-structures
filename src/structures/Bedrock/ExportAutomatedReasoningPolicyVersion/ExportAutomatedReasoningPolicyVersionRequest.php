<?php

namespace Sunaoka\Aws\Structures\Bedrock\ExportAutomatedReasoningPolicyVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 */
class ExportAutomatedReasoningPolicyVersionRequest extends Request
{
    /**
     * @param array{policyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
