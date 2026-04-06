<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectToxicContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TextSegment> $TextSegments
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW' $LanguageCode
 */
class DetectToxicContentRequest extends Request
{
    /**
     * @param array{
     *     TextSegments: list<Shapes\TextSegment>,
     *     LanguageCode: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
