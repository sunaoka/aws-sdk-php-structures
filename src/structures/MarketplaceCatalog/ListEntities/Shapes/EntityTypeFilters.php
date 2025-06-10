<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataProductFilters|null $DataProductFilters
 * @property SaaSProductFilters|null $SaaSProductFilters
 * @property AmiProductFilters|null $AmiProductFilters
 * @property OfferFilters|null $OfferFilters
 * @property ContainerProductFilters|null $ContainerProductFilters
 * @property ResaleAuthorizationFilters|null $ResaleAuthorizationFilters
 * @property MachineLearningProductFilters|null $MachineLearningProductFilters
 */
class EntityTypeFilters extends Shape
{
    /**
     * @param array{
     *     DataProductFilters?: DataProductFilters|null,
     *     SaaSProductFilters?: SaaSProductFilters|null,
     *     AmiProductFilters?: AmiProductFilters|null,
     *     OfferFilters?: OfferFilters|null,
     *     ContainerProductFilters?: ContainerProductFilters|null,
     *     ResaleAuthorizationFilters?: ResaleAuthorizationFilters|null,
     *     MachineLearningProductFilters?: MachineLearningProductFilters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
