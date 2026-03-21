<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicyStoreAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $policyStoreId
 */
class PolicyStoreAliasFilter extends Shape
{
    /**
     * @param array{policyStoreId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
