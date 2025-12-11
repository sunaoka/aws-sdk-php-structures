<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyEngineId
 * @property string $policyId
 * @property string|null $description
 * @property Shapes\PolicyDefinition $definition
 * @property 'FAIL_ON_ANY_FINDINGS'|'IGNORE_ALL_FINDINGS'|null $validationMode
 */
class UpdatePolicyRequest extends Request
{
    /**
     * @param array{
     *     policyEngineId: string,
     *     policyId: string,
     *     description?: string|null,
     *     definition: Shapes\PolicyDefinition,
     *     validationMode?: 'FAIL_ON_ANY_FINDINGS'|'IGNORE_ALL_FINDINGS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
