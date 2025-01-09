<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string $policyId
 */
class GetPolicyRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     policyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
