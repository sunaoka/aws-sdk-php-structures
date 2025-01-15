<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserTurnInputSpecification $input
 * @property UserTurnOutputSpecification $expectedOutput
 * @property UserTurnOutputSpecification|null $actualOutput
 * @property ExecutionErrorDetails|null $errorDetails
 * @property 'Matched'|'Mismatched'|'ExecutionError'|null $endToEndResult
 * @property 'Matched'|'Mismatched'|'ExecutionError'|null $intentMatchResult
 * @property 'Matched'|'Mismatched'|'ExecutionError'|null $slotMatchResult
 * @property 'Matched'|'Mismatched'|'ExecutionError'|null $speechTranscriptionResult
 * @property ConversationLevelResultDetail|null $conversationLevelResult
 */
class UserTurnResult extends Shape
{
    /**
     * @param array{
     *     input: UserTurnInputSpecification,
     *     expectedOutput: UserTurnOutputSpecification,
     *     actualOutput?: UserTurnOutputSpecification|null,
     *     errorDetails?: ExecutionErrorDetails|null,
     *     endToEndResult?: 'Matched'|'Mismatched'|'ExecutionError'|null,
     *     intentMatchResult?: 'Matched'|'Mismatched'|'ExecutionError'|null,
     *     slotMatchResult?: 'Matched'|'Mismatched'|'ExecutionError'|null,
     *     speechTranscriptionResult?: 'Matched'|'Mismatched'|'ExecutionError'|null,
     *     conversationLevelResult?: ConversationLevelResultDetail|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
