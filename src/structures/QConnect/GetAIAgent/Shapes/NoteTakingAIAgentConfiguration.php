<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $noteTakingAIPromptId
 * @property string|null $noteTakingAIGuardrailId
 * @property string|null $locale
 */
class NoteTakingAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     noteTakingAIPromptId?: string|null,
     *     noteTakingAIGuardrailId?: string|null,
     *     locale?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
