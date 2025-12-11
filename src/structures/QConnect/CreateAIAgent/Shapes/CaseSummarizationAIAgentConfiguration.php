<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $caseSummarizationAIPromptId
 * @property string|null $caseSummarizationAIGuardrailId
 * @property string|null $locale
 */
class CaseSummarizationAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     caseSummarizationAIPromptId?: string|null,
     *     caseSummarizationAIGuardrailId?: string|null,
     *     locale?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
