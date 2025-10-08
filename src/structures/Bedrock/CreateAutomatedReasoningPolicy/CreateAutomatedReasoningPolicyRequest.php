<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateAutomatedReasoningPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $clientRequestToken
 * @property Shapes\AutomatedReasoningPolicyDefinition|null $policyDefinition
 * @property list<Shapes\Tag>|null $tags
 */
class CreateAutomatedReasoningPolicyRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     clientRequestToken?: string|null,
     *     policyDefinition?: Shapes\AutomatedReasoningPolicyDefinition|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
