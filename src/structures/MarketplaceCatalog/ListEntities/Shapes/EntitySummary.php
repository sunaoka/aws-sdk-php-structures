<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $EntityType
 * @property string $EntityId
 * @property string $EntityArn
 * @property string $LastModifiedDate
 * @property string $Visibility
 * @property AmiProductSummary $AmiProductSummary
 * @property ContainerProductSummary $ContainerProductSummary
 * @property DataProductSummary $DataProductSummary
 * @property SaaSProductSummary $SaaSProductSummary
 * @property OfferSummary $OfferSummary
 * @property ResaleAuthorizationSummary $ResaleAuthorizationSummary
 */
class EntitySummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     EntityType?: string,
     *     EntityId?: string,
     *     EntityArn?: string,
     *     LastModifiedDate?: string,
     *     Visibility?: string,
     *     AmiProductSummary?: AmiProductSummary,
     *     ContainerProductSummary?: ContainerProductSummary,
     *     DataProductSummary?: DataProductSummary,
     *     SaaSProductSummary?: SaaSProductSummary,
     *     OfferSummary?: OfferSummary,
     *     ResaleAuthorizationSummary?: ResaleAuthorizationSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
