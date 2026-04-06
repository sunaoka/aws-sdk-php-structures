<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\PolicyDefinition $definition
 * @property string|null $description
 * @property 'FAIL_ON_ANY_FINDINGS'|'IGNORE_ALL_FINDINGS'|null $validationMode
 * @property string $policyEngineId
 * @property string|null $clientToken
 */
class CreatePolicyRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     definition: Shapes\PolicyDefinition,
     *     description?: string|null,
     *     validationMode?: 'FAIL_ON_ANY_FINDINGS'|'IGNORE_ALL_FINDINGS'|null,
     *     policyEngineId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
