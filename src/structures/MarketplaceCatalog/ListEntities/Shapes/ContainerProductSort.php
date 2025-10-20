<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EntityId'|'LastModifiedDate'|'ProductTitle'|'Visibility'|'CompatibleAWSServices'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 */
class ContainerProductSort extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'EntityId'|'LastModifiedDate'|'ProductTitle'|'Visibility'|'CompatibleAWSServices'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
