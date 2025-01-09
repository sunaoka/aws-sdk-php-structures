<?php

namespace Sunaoka\Aws\Structures\IdentityStore\CreateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property string $DisplayName
 * @property string $Description
 */
class CreateGroupRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     DisplayName?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
