<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataProductFilters $DataProductFilters
 * @property SaaSProductFilters $SaaSProductFilters
 * @property AmiProductFilters $AmiProductFilters
 * @property OfferFilters $OfferFilters
 * @property ContainerProductFilters $ContainerProductFilters
 * @property ResaleAuthorizationFilters $ResaleAuthorizationFilters
 */
class EntityTypeFilters extends Shape
{
    /**
     * @param array{
     *     DataProductFilters?: DataProductFilters,
     *     SaaSProductFilters?: SaaSProductFilters,
     *     AmiProductFilters?: AmiProductFilters,
     *     OfferFilters?: OfferFilters,
     *     ContainerProductFilters?: ContainerProductFilters,
     *     ResaleAuthorizationFilters?: ResaleAuthorizationFilters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
