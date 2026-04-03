<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'de-DE'|'en-US'|'es-ES'|'fr-FR'|'it-IT'|'pt-BR'|'ja-JP'|'ko-KR'|'zh-CN'|null $FormLanguage
 */
class EvaluationFormLanguageConfiguration extends Shape
{
    /**
     * @param array{FormLanguage?: 'de-DE'|'en-US'|'es-ES'|'fr-FR'|'it-IT'|'pt-BR'|'ja-JP'|'ko-KR'|'zh-CN'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
