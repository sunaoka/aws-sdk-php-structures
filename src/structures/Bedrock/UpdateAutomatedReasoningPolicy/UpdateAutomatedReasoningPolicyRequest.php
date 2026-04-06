<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateAutomatedReasoningPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property Shapes\AutomatedReasoningPolicyDefinition $policyDefinition
 * @property string|null $name
 * @property string|null $description
 */
class UpdateAutomatedReasoningPolicyRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     policyDefinition: Shapes\AutomatedReasoningPolicyDefinition,
     *     name?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
