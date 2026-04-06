<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdatePolicyStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property Shapes\ValidationSettings $validationSettings
 */
class UpdatePolicyStoreRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     validationSettings: Shapes\ValidationSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
