<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicyStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 */
class GetPolicyStoreRequest extends Request
{
    /**
     * @param array{policyStoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
