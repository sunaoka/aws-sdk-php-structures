<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectSentiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TextList
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW' $LanguageCode
 */
class BatchDetectSentimentRequest extends Request
{
    /**
     * @param array{
     *     TextList: list<string>,
     *     LanguageCode: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
