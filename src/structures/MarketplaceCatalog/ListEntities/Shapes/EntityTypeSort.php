<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataProductSort|null $DataProductSort
 * @property SaaSProductSort|null $SaaSProductSort
 * @property AmiProductSort|null $AmiProductSort
 * @property OfferSort|null $OfferSort
 * @property ContainerProductSort|null $ContainerProductSort
 * @property ResaleAuthorizationSort|null $ResaleAuthorizationSort
 */
class EntityTypeSort extends Shape
{
    /**
     * @param array{
     *     DataProductSort?: DataProductSort|null,
     *     SaaSProductSort?: SaaSProductSort|null,
     *     AmiProductSort?: AmiProductSort|null,
     *     OfferSort?: OfferSort|null,
     *     ContainerProductSort?: ContainerProductSort|null,
     *     ResaleAuthorizationSort?: ResaleAuthorizationSort|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
