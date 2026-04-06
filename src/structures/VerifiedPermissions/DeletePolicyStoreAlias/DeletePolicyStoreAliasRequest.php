<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\DeletePolicyStoreAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aliasName
 */
class DeletePolicyStoreAliasRequest extends Request
{
    /**
     * @param array{aliasName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
