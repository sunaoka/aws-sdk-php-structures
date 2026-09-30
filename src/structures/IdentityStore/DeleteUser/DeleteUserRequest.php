<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DeleteUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property string $UserId
 * @property string|null $Revision
 */
class DeleteUserRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     UserId: string,
     *     Revision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
