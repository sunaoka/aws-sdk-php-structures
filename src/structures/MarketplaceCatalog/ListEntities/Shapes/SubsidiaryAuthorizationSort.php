<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EntityId'|'Status'|'ResourceId'|'SubsidiaryAccountId'|'CreatedDate'|'LastModifiedDate'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 */
class SubsidiaryAuthorizationSort extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'EntityId'|'Status'|'ResourceId'|'SubsidiaryAccountId'|'CreatedDate'|'LastModifiedDate'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
