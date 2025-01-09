<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartCallAnalyticsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VocabularyName
 * @property string $VocabularyFilterName
 * @property string $LanguageModelName
 */
class LanguageIdSettings extends Shape
{
    /**
     * @param array{
     *     VocabularyName?: string,
     *     VocabularyFilterName?: string,
     *     LanguageModelName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
