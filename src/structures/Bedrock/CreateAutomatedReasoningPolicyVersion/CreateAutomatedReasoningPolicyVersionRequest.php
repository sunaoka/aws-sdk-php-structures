<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateAutomatedReasoningPolicyVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string|null $clientRequestToken
 * @property string $lastUpdatedDefinitionHash
 * @property list<Shapes\Tag>|null $tags
 */
class CreateAutomatedReasoningPolicyVersionRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     clientRequestToken?: string|null,
     *     lastUpdatedDefinitionHash: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
