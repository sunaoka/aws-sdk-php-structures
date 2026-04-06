<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListChecks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $awsService
 * @property 'en'|'ja'|'zh'|'fr'|'de'|'ko'|'zh_TW'|'it'|'es'|'pt_BR'|'id'|null $language
 * @property int<1, 200>|null $maxResults
 * @property string|null $nextToken
 * @property 'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'|null $pillar
 * @property 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected'|null $source
 */
class ListChecksRequest extends Request
{
    /**
     * @param array{
     *     awsService?: string|null,
     *     language?: 'en'|'ja'|'zh'|'fr'|'de'|'ko'|'zh_TW'|'it'|'es'|'pt_BR'|'id'|null,
     *     maxResults?: int<1, 200>|null,
     *     nextToken?: string|null,
     *     pillar?: 'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'|null,
     *     source?: 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
