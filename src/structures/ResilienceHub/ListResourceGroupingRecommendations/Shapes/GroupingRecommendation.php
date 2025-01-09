<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListResourceGroupingRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'High'|'Medium' $confidenceLevel
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property GroupingAppComponent $groupingAppComponent
 * @property string $groupingRecommendationId
 * @property list<string> $recommendationReasons
 * @property 'DistinctBusinessPurpose'|'SeparateDataConcern'|'DistinctUserGroupHandling'|'Other' $rejectionReason
 * @property list<GroupingResource> $resources
 * @property double $score
 * @property 'Accepted'|'Rejected'|'PendingDecision' $status
 */
class GroupingRecommendation extends Shape
{
    /**
     * @param array{
     *     confidenceLevel: 'High'|'Medium',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     groupingAppComponent: GroupingAppComponent,
     *     groupingRecommendationId: string,
     *     recommendationReasons: list<string>,
     *     rejectionReason?: 'DistinctBusinessPurpose'|'SeparateDataConcern'|'DistinctUserGroupHandling'|'Other',
     *     resources: list<GroupingResource>,
     *     score: double,
     *     status: 'Accepted'|'Rejected'|'PendingDecision'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
