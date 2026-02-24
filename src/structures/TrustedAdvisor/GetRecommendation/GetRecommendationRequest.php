<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\GetRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommendationIdentifier
 * @property 'en'|'ja'|'zh'|'fr'|'de'|'ko'|'zh_TW'|'it'|'es'|'pt_BR'|'id'|null $language
 */
class GetRecommendationRequest extends Request
{
    /**
     * @param array{
     *     recommendationIdentifier: string,
     *     language?: 'en'|'ja'|'zh'|'fr'|'de'|'ko'|'zh_TW'|'it'|'es'|'pt_BR'|'id'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
