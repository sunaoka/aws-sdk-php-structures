<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyEngineId
 * @property string $policyId
 * @property Shapes\UpdatedDescription|null $description
 * @property Shapes\PolicyDefinition|null $definition
 * @property 'FAIL_ON_ANY_FINDINGS'|'IGNORE_ALL_FINDINGS'|null $validationMode
 */
class UpdatePolicyRequest extends Request
{
    /**
     * @param array{
     *     policyEngineId: string,
     *     policyId: string,
     *     description?: Shapes\UpdatedDescription|null,
     *     definition?: Shapes\PolicyDefinition|null,
     *     validationMode?: 'FAIL_ON_ANY_FINDINGS'|'IGNORE_ALL_FINDINGS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
