<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateAutomatedReasoningPolicyAnnotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $naturalLanguage
 */
class AutomatedReasoningPolicyAddRuleFromNaturalLanguageAnnotation extends Shape
{
    /**
     * @param array{naturalLanguage: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
