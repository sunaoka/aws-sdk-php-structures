<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $policyStoreId
 * @property Shapes\PolicyDefinition $definition
 * @property string|null $name
 */
class CreatePolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     policyStoreId: string,
     *     definition: Shapes\PolicyDefinition,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
