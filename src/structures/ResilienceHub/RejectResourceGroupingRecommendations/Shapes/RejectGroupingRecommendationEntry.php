<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\RejectResourceGroupingRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupingRecommendationId
 * @property 'DistinctBusinessPurpose'|'SeparateDataConcern'|'DistinctUserGroupHandling'|'Other'|null $rejectionReason
 */
class RejectGroupingRecommendationEntry extends Shape
{
    /**
     * @param array{
     *     groupingRecommendationId: string,
     *     rejectionReason?: 'DistinctBusinessPurpose'|'SeparateDataConcern'|'DistinctUserGroupHandling'|'Other'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
