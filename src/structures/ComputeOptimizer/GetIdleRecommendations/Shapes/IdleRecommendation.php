<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceArn
 * @property string|null $resourceId
 * @property 'EC2Instance'|'AutoScalingGroup'|'EBSVolume'|'ECSService'|'RDSDBInstance'|null $resourceType
 * @property string|null $accountId
 * @property 'Idle'|'Unattached'|null $finding
 * @property string|null $findingDescription
 * @property IdleSavingsOpportunity|null $savingsOpportunity
 * @property IdleSavingsOpportunityAfterDiscounts|null $savingsOpportunityAfterDiscounts
 * @property list<IdleUtilizationMetric>|null $utilizationMetrics
 * @property double|null $lookBackPeriodInDays
 * @property \Aws\Api\DateTimeResult|null $lastRefreshTimestamp
 * @property list<Tag>|null $tags
 */
class IdleRecommendation extends Shape
{
    /**
     * @param array{
     *     resourceArn?: string|null,
     *     resourceId?: string|null,
     *     resourceType?: 'EC2Instance'|'AutoScalingGroup'|'EBSVolume'|'ECSService'|'RDSDBInstance'|null,
     *     accountId?: string|null,
     *     finding?: 'Idle'|'Unattached'|null,
     *     findingDescription?: string|null,
     *     savingsOpportunity?: IdleSavingsOpportunity|null,
     *     savingsOpportunityAfterDiscounts?: IdleSavingsOpportunityAfterDiscounts|null,
     *     utilizationMetrics?: list<IdleUtilizationMetric>|null,
     *     lookBackPeriodInDays?: double|null,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
