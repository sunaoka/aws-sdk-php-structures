<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightId
 * @property string $NextToken
 * @property 'DE_DE'|'EN_US'|'EN_GB'|'ES_ES'|'FR_FR'|'IT_IT'|'JA_JP'|'KO_KR'|'PT_BR'|'ZH_CN'|'ZH_TW' $Locale
 * @property string $AccountId
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     InsightId: string,
     *     NextToken?: string,
     *     Locale?: 'DE_DE'|'EN_US'|'EN_GB'|'ES_ES'|'FR_FR'|'IT_IT'|'JA_JP'|'KO_KR'|'PT_BR'|'ZH_CN'|'ZH_TW',
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
