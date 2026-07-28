<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListRecommendationsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 600>|null $maxResults
 * @property string $awsResourceArn
 * @property 'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'|null $pillar
 * @property 'ok'|'warning'|'error'|null $status
 * @property string|null $checkArn
 * @property 'en'|'ja'|'zh'|'fr'|'de'|'ko'|'zh_TW'|'it'|'es'|'pt_BR'|'id'|null $language
 */
class ListRecommendationsForResourceRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 600>|null,
     *     awsResourceArn: string,
     *     pillar?: 'cost_optimizing'|'performance'|'security'|'service_limits'|'fault_tolerance'|'operational_excellence'|null,
     *     status?: 'ok'|'warning'|'error'|null,
     *     checkArn?: string|null,
     *     language?: 'en'|'ja'|'zh'|'fr'|'de'|'ko'|'zh_TW'|'it'|'es'|'pt_BR'|'id'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
