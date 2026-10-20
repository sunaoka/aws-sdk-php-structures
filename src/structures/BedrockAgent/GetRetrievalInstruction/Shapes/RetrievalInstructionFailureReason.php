<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetRetrievalInstruction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RETRIEVAL_GUIDANCE'|'PERSONA'|'ANSWER_FORMAT'|'ANSWER_POLICY'|null $fieldName
 * @property 'CONTENT_REJECTED'|'CLIENT_ERROR'|'INTERNAL_ERROR' $code
 * @property string $message
 */
class RetrievalInstructionFailureReason extends Shape
{
    /**
     * @param array{
     *     fieldName?: 'RETRIEVAL_GUIDANCE'|'PERSONA'|'ANSWER_FORMAT'|'ANSWER_POLICY'|null,
     *     code: 'CONTENT_REJECTED'|'CLIENT_ERROR'|'INTERNAL_ERROR',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
