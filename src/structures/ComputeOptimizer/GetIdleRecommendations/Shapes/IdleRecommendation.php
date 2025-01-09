<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceArn
 * @property string $resourceId
 * @property 'EC2Instance'|'AutoScalingGroup'|'EBSVolume'|'ECSService'|'RDSDBInstance' $resourceType
 * @property string $accountId
 * @property 'Idle'|'Unattached' $finding
 * @property string $findingDescription
 * @property IdleSavingsOpportunity $savingsOpportunity
 * @property IdleSavingsOpportunityAfterDiscounts $savingsOpportunityAfterDiscounts
 * @property list<IdleUtilizationMetric> $utilizationMetrics
 * @property double $lookBackPeriodInDays
 * @property \Aws\Api\DateTimeResult $lastRefreshTimestamp
 * @property list<Tag> $tags
 */
class IdleRecommendation extends Shape
{
    /**
     * @param array{
     *     resourceArn?: string,
     *     resourceId?: string,
     *     resourceType?: 'EC2Instance'|'AutoScalingGroup'|'EBSVolume'|'ECSService'|'RDSDBInstance',
     *     accountId?: string,
     *     finding?: 'Idle'|'Unattached',
     *     findingDescription?: string,
     *     savingsOpportunity?: IdleSavingsOpportunity,
     *     savingsOpportunityAfterDiscounts?: IdleSavingsOpportunityAfterDiscounts,
     *     utilizationMetrics?: list<IdleUtilizationMetric>,
     *     lookBackPeriodInDays?: double,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
