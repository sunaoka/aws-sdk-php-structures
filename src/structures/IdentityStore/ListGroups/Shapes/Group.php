<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdentityStoreId
 * @property string $GroupId
 * @property string $GroupArn
 * @property string $Revision
 * @property string|null $DisplayName
 * @property list<ExternalId>|null $ExternalIds
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $CreatedBy
 * @property string|null $UpdatedBy
 */
class Group extends Shape
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     GroupId: string,
     *     GroupArn: string,
     *     Revision: string,
     *     DisplayName?: string|null,
     *     ExternalIds?: list<ExternalId>|null,
     *     Description?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null,
     *     UpdatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
