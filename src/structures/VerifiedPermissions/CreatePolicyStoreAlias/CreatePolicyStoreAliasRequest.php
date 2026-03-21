<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicyStoreAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aliasName
 * @property string $policyStoreId
 */
class CreatePolicyStoreAliasRequest extends Request
{
    /**
     * @param array{
     *     aliasName: string,
     *     policyStoreId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
