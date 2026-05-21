<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\DeletePolicyStoreAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aliasName
 * @property 'SoftDelete'|'HardDelete'|null $deletionMode
 */
class DeletePolicyStoreAliasRequest extends Request
{
    /**
     * @param array{
     *     aliasName: string,
     *     deletionMode?: 'SoftDelete'|'HardDelete'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
