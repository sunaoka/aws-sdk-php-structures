<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\DeletePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string $policyId
 */
class DeletePolicyRequest extends Request
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
