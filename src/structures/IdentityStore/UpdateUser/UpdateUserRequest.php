<?php

namespace Sunaoka\Aws\Structures\IdentityStore\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property string $UserId
 * @property list<Shapes\AttributeOperation> $Operations
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     UserId: string,
     *     Operations: list<Shapes\AttributeOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
