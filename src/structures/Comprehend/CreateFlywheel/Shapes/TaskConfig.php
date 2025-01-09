<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateFlywheel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW' $LanguageCode
 * @property DocumentClassificationConfig $DocumentClassificationConfig
 * @property EntityRecognitionConfig $EntityRecognitionConfig
 */
class TaskConfig extends Shape
{
    /**
     * @param array{
     *     LanguageCode: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW',
     *     DocumentClassificationConfig?: DocumentClassificationConfig,
     *     EntityRecognitionConfig?: EntityRecognitionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
