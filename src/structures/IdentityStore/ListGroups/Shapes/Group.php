<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupId
 * @property string|null $DisplayName
 * @property list<ExternalId>|null $ExternalIds
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $CreatedBy
 * @property string|null $UpdatedBy
 * @property string $IdentityStoreId
 */
class Group extends Shape
{
    /**
     * @param array{
     *     GroupId: string,
     *     DisplayName?: string|null,
     *     ExternalIds?: list<ExternalId>|null,
     *     Description?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null,
     *     UpdatedBy?: string|null,
     *     IdentityStoreId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
