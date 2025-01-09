<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\GetOrganizationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property list<string> $awsServices
 * @property string $checkArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'in_progress'|'pending_response'|'dismissed'|'resolved' $lifecycleStage
 * @property string $name
 * @property RecommendationPillarSpecificAggregates $pillarSpecificAggregates
 * @property list<'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'> $pillars
 * @property \Aws\Api\DateTimeResult $resolvedAt
 * @property RecommendationResourcesAggregates $resourcesAggregates
 * @property 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected' $source
 * @property 'ok'|'warning'|'error' $status
 * @property 'standard'|'priority' $type
 * @property string $updateReason
 * @property 'non_critical_account'|'temporary_account'|'valid_business_case'|'other_methods_available'|'low_priority'|'not_applicable'|'other' $updateReasonCode
 * @property string $updatedOnBehalfOf
 * @property string $updatedOnBehalfOfJobTitle
 */
class OrganizationRecommendation extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     awsServices?: list<string>,
     *     checkArn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     description: string,
     *     id: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     lifecycleStage?: 'in_progress'|'pending_response'|'dismissed'|'resolved',
     *     name: string,
     *     pillarSpecificAggregates?: RecommendationPillarSpecificAggregates,
     *     pillars: list<'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'>,
     *     resolvedAt?: \Aws\Api\DateTimeResult,
     *     resourcesAggregates: RecommendationResourcesAggregates,
     *     source: 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected',
     *     status: 'ok'|'warning'|'error',
     *     type: 'standard'|'priority',
     *     updateReason?: string,
     *     updateReasonCode?: 'non_critical_account'|'temporary_account'|'valid_business_case'|'other_methods_available'|'low_priority'|'not_applicable'|'other',
     *     updatedOnBehalfOf?: string,
     *     updatedOnBehalfOfJobTitle?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
