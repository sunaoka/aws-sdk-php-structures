<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DBStorageConfiguration $storageConfiguration
 * @property int $rank
 * @property SavingsOpportunity $savingsOpportunity
 * @property RDSStorageSavingsOpportunityAfterDiscounts $savingsOpportunityAfterDiscounts
 */
class RDSDBStorageRecommendationOption extends Shape
{
    /**
     * @param array{
     *     storageConfiguration?: DBStorageConfiguration,
     *     rank?: int,
     *     savingsOpportunity?: SavingsOpportunity,
     *     savingsOpportunityAfterDiscounts?: RDSStorageSavingsOpportunityAfterDiscounts
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
