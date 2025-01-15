<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightId
 * @property string|null $NextToken
 * @property 'DE_DE'|'EN_US'|'EN_GB'|'ES_ES'|'FR_FR'|'IT_IT'|'JA_JP'|'KO_KR'|'PT_BR'|'ZH_CN'|'ZH_TW'|null $Locale
 * @property string|null $AccountId
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     InsightId: string,
     *     NextToken?: string|null,
     *     Locale?: 'DE_DE'|'EN_US'|'EN_GB'|'ES_ES'|'FR_FR'|'IT_IT'|'JA_JP'|'KO_KR'|'PT_BR'|'ZH_CN'|'ZH_TW'|null,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
