<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $afterLastUpdatedAt
 * @property string $awsService
 * @property \Aws\Api\DateTimeResult $beforeLastUpdatedAt
 * @property string $checkIdentifier
 * @property int $maxResults
 * @property string $nextToken
 * @property 'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence' $pillar
 * @property 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected' $source
 * @property 'ok'|'warning'|'error' $status
 * @property 'standard'|'priority' $type
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     afterLastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     awsService?: string,
     *     beforeLastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     checkIdentifier?: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     pillar?: 'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence',
     *     source?: 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected',
     *     status?: 'ok'|'warning'|'error',
     *     type?: 'standard'|'priority'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
