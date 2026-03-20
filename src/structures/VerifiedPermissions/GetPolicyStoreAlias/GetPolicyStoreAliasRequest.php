<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicyStoreAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aliasName
 */
class GetPolicyStoreAliasRequest extends Request
{
    /**
     * @param array{aliasName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
