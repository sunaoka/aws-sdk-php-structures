<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DBStorageConfiguration|null $storageConfiguration
 * @property int|null $rank
 * @property SavingsOpportunity|null $savingsOpportunity
 * @property RDSStorageSavingsOpportunityAfterDiscounts|null $savingsOpportunityAfterDiscounts
 */
class RDSDBStorageRecommendationOption extends Shape
{
    /**
     * @param array{
     *     storageConfiguration?: DBStorageConfiguration|null,
     *     rank?: int|null,
     *     savingsOpportunity?: SavingsOpportunity|null,
     *     savingsOpportunityAfterDiscounts?: RDSStorageSavingsOpportunityAfterDiscounts|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
