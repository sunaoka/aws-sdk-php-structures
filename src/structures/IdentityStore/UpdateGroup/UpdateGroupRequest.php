<?php

namespace Sunaoka\Aws\Structures\IdentityStore\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property string $GroupId
 * @property list<Shapes\AttributeOperation> $Operations
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     GroupId: string,
     *     Operations: list<Shapes\AttributeOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
