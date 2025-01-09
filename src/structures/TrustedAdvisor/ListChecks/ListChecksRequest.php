<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListChecks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $awsService
 * @property 'en'|'ja'|'zh'|'fr'|'de'|'ko'|'zh_TW'|'it'|'es'|'pt_BR'|'id' $language
 * @property int<1, 200> $maxResults
 * @property string $nextToken
 * @property 'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence' $pillar
 * @property 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected' $source
 */
class ListChecksRequest extends Request
{
    /**
     * @param array{
     *     awsService?: string,
     *     language?: 'en'|'ja'|'zh'|'fr'|'de'|'ko'|'zh_TW'|'it'|'es'|'pt_BR'|'id',
     *     maxResults?: int<1, 200>,
     *     nextToken?: string,
     *     pillar?: 'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence',
     *     source?: 'aws_config'|'compute_optimizer'|'cost_explorer'|'lse'|'manual'|'pse'|'rds'|'resilience'|'resilience_hub'|'security_hub'|'stir'|'ta_check'|'well_architected'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
