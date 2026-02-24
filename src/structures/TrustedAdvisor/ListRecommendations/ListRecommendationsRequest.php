<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 200>|null $maxResults
 * @property 'standard'|'priority'|null $type
 * @property 'ok'|'warning'|'error'|null $status
 * @property 'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'|null $pillar
 * @property string|null $awsService
 * @property 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected'|'cost_optimization_hub'|null $source
 * @property string|null $checkIdentifier
 * @property \Aws\Api\DateTimeResult|null $afterLastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $beforeLastUpdatedAt
 * @property 'en'|'ja'|'zh'|'fr'|'de'|'ko'|'zh_TW'|'it'|'es'|'pt_BR'|'id'|null $language
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 200>|null,
     *     type?: 'standard'|'priority'|null,
     *     status?: 'ok'|'warning'|'error'|null,
     *     pillar?: 'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'|null,
     *     awsService?: string|null,
     *     source?: 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected'|'cost_optimization_hub'|null,
     *     checkIdentifier?: string|null,
     *     afterLastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     beforeLastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     language?: 'en'|'ja'|'zh'|'fr'|'de'|'ko'|'zh_TW'|'it'|'es'|'pt_BR'|'id'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
