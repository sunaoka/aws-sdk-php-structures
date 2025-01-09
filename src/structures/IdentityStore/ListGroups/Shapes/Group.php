<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupId
 * @property string $DisplayName
 * @property list<ExternalId> $ExternalIds
 * @property string $Description
 * @property string $IdentityStoreId
 */
class Group extends Shape
{
    /**
     * @param array{
     *     GroupId: string,
     *     DisplayName?: string,
     *     ExternalIds?: list<ExternalId>,
     *     Description?: string,
     *     IdentityStoreId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
