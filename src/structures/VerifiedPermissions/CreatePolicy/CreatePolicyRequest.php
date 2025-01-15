<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $policyStoreId
 * @property Shapes\PolicyDefinition $definition
 */
class CreatePolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     policyStoreId: string,
     *     definition: Shapes\PolicyDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
