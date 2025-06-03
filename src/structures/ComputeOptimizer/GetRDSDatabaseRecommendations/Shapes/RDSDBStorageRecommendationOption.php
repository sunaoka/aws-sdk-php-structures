<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DBStorageConfiguration|null $storageConfiguration
 * @property int|null $rank
 * @property SavingsOpportunity|null $savingsOpportunity
 * @property RDSStorageSavingsOpportunityAfterDiscounts|null $savingsOpportunityAfterDiscounts
 * @property 'None'|'Low'|'Medium'|'High'|null $estimatedMonthlyVolumeIOPsCostVariation
 */
class RDSDBStorageRecommendationOption extends Shape
{
    /**
     * @param array{
     *     storageConfiguration?: DBStorageConfiguration|null,
     *     rank?: int|null,
     *     savingsOpportunity?: SavingsOpportunity|null,
     *     savingsOpportunityAfterDiscounts?: RDSStorageSavingsOpportunityAfterDiscounts|null,
     *     estimatedMonthlyVolumeIOPsCostVariation?: 'None'|'Low'|'Medium'|'High'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
