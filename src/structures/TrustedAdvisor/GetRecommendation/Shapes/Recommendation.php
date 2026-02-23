<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'standard'|'priority' $type
 * @property string|null $checkArn
 * @property 'ok'|'warning'|'error' $status
 * @property 'in_progress'|'pending_response'|'dismissed'|'resolved'|null $lifecycleStage
 * @property list<'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'> $pillars
 * @property 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected'|'cost_optimization_hub' $source
 * @property list<string>|null $awsServices
 * @property string $name
 * @property RecommendationResourcesAggregates $resourcesAggregates
 * @property RecommendationPillarSpecificAggregates|null $pillarSpecificAggregates
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string $arn
 * @property 'no_data_ok'|null $statusReason
 * @property string $description
 * @property string|null $createdBy
 * @property string|null $updatedOnBehalfOf
 * @property string|null $updatedOnBehalfOfJobTitle
 * @property string|null $updateReason
 * @property 'non_critical_account'|'temporary_account'|'valid_business_case'|'other_methods_available'|'low_priority'|'not_applicable'|'other'|null $updateReasonCode
 * @property \Aws\Api\DateTimeResult|null $resolvedAt
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: 'standard'|'priority',
     *     checkArn?: string|null,
     *     status: 'ok'|'warning'|'error',
     *     lifecycleStage?: 'in_progress'|'pending_response'|'dismissed'|'resolved'|null,
     *     pillars: list<'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'>,
     *     source: 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected'|'cost_optimization_hub',
     *     awsServices?: list<string>|null,
     *     name: string,
     *     resourcesAggregates: RecommendationResourcesAggregates,
     *     pillarSpecificAggregates?: RecommendationPillarSpecificAggregates|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     arn: string,
     *     statusReason?: 'no_data_ok'|null,
     *     description: string,
     *     createdBy?: string|null,
     *     updatedOnBehalfOf?: string|null,
     *     updatedOnBehalfOfJobTitle?: string|null,
     *     updateReason?: string|null,
     *     updateReasonCode?: 'non_critical_account'|'temporary_account'|'valid_business_case'|'other_methods_available'|'low_priority'|'not_applicable'|'other'|null,
     *     resolvedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
