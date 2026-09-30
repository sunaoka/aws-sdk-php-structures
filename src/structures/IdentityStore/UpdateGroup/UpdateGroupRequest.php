<?php

namespace Sunaoka\Aws\Structures\IdentityStore\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property string $GroupId
 * @property list<Shapes\AttributeOperation> $Operations
 * @property string|null $Revision
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     GroupId: string,
     *     Operations: list<Shapes\AttributeOperation>,
     *     Revision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
