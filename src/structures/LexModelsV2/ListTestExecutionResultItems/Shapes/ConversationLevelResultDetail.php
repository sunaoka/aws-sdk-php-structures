<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Matched'|'Mismatched'|'ExecutionError' $endToEndResult
 * @property 'Matched'|'Mismatched'|'ExecutionError'|null $speechTranscriptionResult
 */
class ConversationLevelResultDetail extends Shape
{
    /**
     * @param array{
     *     endToEndResult: 'Matched'|'Mismatched'|'ExecutionError',
     *     speechTranscriptionResult?: 'Matched'|'Mismatched'|'ExecutionError'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
