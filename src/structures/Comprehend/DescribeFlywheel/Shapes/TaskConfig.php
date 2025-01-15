<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeFlywheel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW' $LanguageCode
 * @property DocumentClassificationConfig|null $DocumentClassificationConfig
 * @property EntityRecognitionConfig|null $EntityRecognitionConfig
 */
class TaskConfig extends Shape
{
    /**
     * @param array{
     *     LanguageCode: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW',
     *     DocumentClassificationConfig?: DocumentClassificationConfig|null,
     *     EntityRecognitionConfig?: EntityRecognitionConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
