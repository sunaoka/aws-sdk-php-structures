<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\DeletePolicyStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 */
class DeletePolicyStoreRequest extends Request
{
    /**
     * @param array{policyStoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
