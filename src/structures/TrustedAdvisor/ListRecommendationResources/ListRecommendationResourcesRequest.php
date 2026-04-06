<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListRecommendationResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 5000>|null $maxResults
 * @property 'ok'|'warning'|'error'|null $status
 * @property 'excluded'|'included'|null $exclusionStatus
 * @property string|null $regionCode
 * @property string $recommendationIdentifier
 * @property 'en'|'ja'|'zh'|'fr'|'de'|'ko'|'zh_TW'|'it'|'es'|'pt_BR'|'id'|null $language
 */
class ListRecommendationResourcesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 5000>|null,
     *     status?: 'ok'|'warning'|'error'|null,
     *     exclusionStatus?: 'excluded'|'included'|null,
     *     regionCode?: string|null,
     *     recommendationIdentifier: string,
     *     language?: 'en'|'ja'|'zh'|'fr'|'de'|'ko'|'zh_TW'|'it'|'es'|'pt_BR'|'id'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
