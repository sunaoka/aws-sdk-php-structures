<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteAutomatedReasoningPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property bool|null $force
 */
class DeleteAutomatedReasoningPolicyRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
