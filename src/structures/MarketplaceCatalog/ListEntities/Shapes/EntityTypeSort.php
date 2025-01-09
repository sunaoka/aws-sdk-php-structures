<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataProductSort $DataProductSort
 * @property SaaSProductSort $SaaSProductSort
 * @property AmiProductSort $AmiProductSort
 * @property OfferSort $OfferSort
 * @property ContainerProductSort $ContainerProductSort
 * @property ResaleAuthorizationSort $ResaleAuthorizationSort
 */
class EntityTypeSort extends Shape
{
    /**
     * @param array{
     *     DataProductSort?: DataProductSort,
     *     SaaSProductSort?: SaaSProductSort,
     *     AmiProductSort?: AmiProductSort,
     *     OfferSort?: OfferSort,
     *     ContainerProductSort?: ContainerProductSort,
     *     ResaleAuthorizationSort?: ResaleAuthorizationSort
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
