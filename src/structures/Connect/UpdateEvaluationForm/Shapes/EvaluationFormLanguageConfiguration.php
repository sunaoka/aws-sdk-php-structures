<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'de-DE'|'en-US'|'es-ES'|'fr-FR'|'it-IT'|'pt-BR'|null $FormLanguage
 */
class EvaluationFormLanguageConfiguration extends Shape
{
    /**
     * @param array{FormLanguage?: 'de-DE'|'en-US'|'es-ES'|'fr-FR'|'it-IT'|'pt-BR'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
