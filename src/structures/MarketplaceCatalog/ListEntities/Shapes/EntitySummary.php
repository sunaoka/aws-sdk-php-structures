<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $EntityType
 * @property string|null $EntityId
 * @property string|null $EntityArn
 * @property string|null $LastModifiedDate
 * @property string|null $Visibility
 * @property AmiProductSummary|null $AmiProductSummary
 * @property ContainerProductSummary|null $ContainerProductSummary
 * @property DataProductSummary|null $DataProductSummary
 * @property SaaSProductSummary|null $SaaSProductSummary
 * @property OfferSummary|null $OfferSummary
 * @property ResaleAuthorizationSummary|null $ResaleAuthorizationSummary
 * @property MachineLearningProductSummary|null $MachineLearningProductSummary
 */
class EntitySummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     EntityType?: string|null,
     *     EntityId?: string|null,
     *     EntityArn?: string|null,
     *     LastModifiedDate?: string|null,
     *     Visibility?: string|null,
     *     AmiProductSummary?: AmiProductSummary|null,
     *     ContainerProductSummary?: ContainerProductSummary|null,
     *     DataProductSummary?: DataProductSummary|null,
     *     SaaSProductSummary?: SaaSProductSummary|null,
     *     OfferSummary?: OfferSummary|null,
     *     ResaleAuthorizationSummary?: ResaleAuthorizationSummary|null,
     *     MachineLearningProductSummary?: MachineLearningProductSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
