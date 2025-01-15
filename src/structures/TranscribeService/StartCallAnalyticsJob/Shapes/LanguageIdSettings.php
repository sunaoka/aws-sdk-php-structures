<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartCallAnalyticsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VocabularyName
 * @property string|null $VocabularyFilterName
 * @property string|null $LanguageModelName
 */
class LanguageIdSettings extends Shape
{
    /**
     * @param array{
     *     VocabularyName?: string|null,
     *     VocabularyFilterName?: string|null,
     *     LanguageModelName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
