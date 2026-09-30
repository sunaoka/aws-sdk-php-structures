<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DeleteGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property string $GroupId
 * @property string|null $Revision
 */
class DeleteGroupRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     GroupId: string,
     *     Revision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
