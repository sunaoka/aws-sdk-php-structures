<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserTurnInputSpecification $input
 * @property UserTurnOutputSpecification $expectedOutput
 * @property UserTurnOutputSpecification $actualOutput
 * @property ExecutionErrorDetails $errorDetails
 * @property 'Matched'|'Mismatched'|'ExecutionError' $endToEndResult
 * @property 'Matched'|'Mismatched'|'ExecutionError' $intentMatchResult
 * @property 'Matched'|'Mismatched'|'ExecutionError' $slotMatchResult
 * @property 'Matched'|'Mismatched'|'ExecutionError' $speechTranscriptionResult
 * @property ConversationLevelResultDetail $conversationLevelResult
 */
class UserTurnResult extends Shape
{
    /**
     * @param array{
     *     input: UserTurnInputSpecification,
     *     expectedOutput: UserTurnOutputSpecification,
     *     actualOutput?: UserTurnOutputSpecification,
     *     errorDetails?: ExecutionErrorDetails,
     *     endToEndResult?: 'Matched'|'Mismatched'|'ExecutionError',
     *     intentMatchResult?: 'Matched'|'Mismatched'|'ExecutionError',
     *     slotMatchResult?: 'Matched'|'Mismatched'|'ExecutionError',
     *     speechTranscriptionResult?: 'Matched'|'Mismatched'|'ExecutionError',
     *     conversationLevelResult?: ConversationLevelResultDetail
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
