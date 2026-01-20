<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string $policyId
 * @property Shapes\UpdatePolicyDefinition|null $definition
 */
class UpdatePolicyRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     policyId: string,
     *     definition?: Shapes\UpdatePolicyDefinition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
