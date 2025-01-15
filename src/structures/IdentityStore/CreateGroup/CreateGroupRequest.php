<?php

namespace Sunaoka\Aws\Structures\IdentityStore\CreateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property string|null $DisplayName
 * @property string|null $Description
 */
class CreateGroupRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     DisplayName?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
