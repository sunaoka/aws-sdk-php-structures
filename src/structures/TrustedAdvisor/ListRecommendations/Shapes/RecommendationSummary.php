<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property list<string>|null $awsServices
 * @property string|null $checkArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property 'in_progress'|'pending_response'|'dismissed'|'resolved'|null $lifecycleStage
 * @property string $name
 * @property RecommendationPillarSpecificAggregates|null $pillarSpecificAggregates
 * @property list<'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'> $pillars
 * @property RecommendationResourcesAggregates $resourcesAggregates
 * @property 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected' $source
 * @property 'ok'|'warning'|'error' $status
 * @property 'standard'|'priority' $type
 */
class RecommendationSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     awsServices?: list<string>|null,
     *     checkArn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     id: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     lifecycleStage?: 'in_progress'|'pending_response'|'dismissed'|'resolved'|null,
     *     name: string,
     *     pillarSpecificAggregates?: RecommendationPillarSpecificAggregates|null,
     *     pillars: list<'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'>,
     *     resourcesAggregates: RecommendationResourcesAggregates,
     *     source: 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected',
     *     status: 'ok'|'warning'|'error',
     *     type: 'standard'|'priority'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
