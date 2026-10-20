<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateRetrievalInstruction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $retrievalGuidance
 * @property string|null $persona
 * @property string|null $answerFormat
 * @property string|null $answerPolicy
 */
class RetrievalInstructionContent extends Shape
{
    /**
     * @param array{
     *     retrievalGuidance?: string|null,
     *     persona?: string|null,
     *     answerFormat?: string|null,
     *     answerPolicy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
