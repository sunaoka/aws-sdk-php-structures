<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'de-DE'|'en-US'|'es-ES'|'fr-FR'|'it-IT'|'pt-BR'|'ja-JP'|'ko-KR'|'zh-CN'|'ms-MY'|null $FormLanguage
 */
class EvaluationFormLanguageConfiguration extends Shape
{
    /**
     * @param array{FormLanguage?: 'de-DE'|'en-US'|'es-ES'|'fr-FR'|'it-IT'|'pt-BR'|'ja-JP'|'ko-KR'|'zh-CN'|'ms-MY'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
