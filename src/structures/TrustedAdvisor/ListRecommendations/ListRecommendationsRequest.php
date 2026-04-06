<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $afterLastUpdatedAt
 * @property string|null $awsService
 * @property \Aws\Api\DateTimeResult|null $beforeLastUpdatedAt
 * @property string|null $checkIdentifier
 * @property int<1, 200>|null $maxResults
 * @property string|null $nextToken
 * @property 'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'|null $pillar
 * @property 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected'|null $source
 * @property 'ok'|'warning'|'error'|null $status
 * @property 'standard'|'priority'|null $type
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     afterLastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     awsService?: string|null,
     *     beforeLastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     checkIdentifier?: string|null,
     *     maxResults?: int<1, 200>|null,
     *     nextToken?: string|null,
     *     pillar?: 'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'|null,
     *     source?: 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected'|null,
     *     status?: 'ok'|'warning'|'error'|null,
     *     type?: 'standard'|'priority'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
