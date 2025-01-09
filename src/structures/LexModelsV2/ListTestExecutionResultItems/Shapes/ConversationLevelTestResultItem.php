<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $conversationId
 * @property 'Matched'|'Mismatched'|'ExecutionError' $endToEndResult
 * @property 'Matched'|'Mismatched'|'ExecutionError' $speechTranscriptionResult
 * @property list<ConversationLevelIntentClassificationResultItem> $intentClassificationResults
 * @property list<ConversationLevelSlotResolutionResultItem> $slotResolutionResults
 */
class ConversationLevelTestResultItem extends Shape
{
    /**
     * @param array{
     *     conversationId: string,
     *     endToEndResult: 'Matched'|'Mismatched'|'ExecutionError',
     *     speechTranscriptionResult?: 'Matched'|'Mismatched'|'ExecutionError',
     *     intentClassificationResults: list<ConversationLevelIntentClassificationResultItem>,
     *     slotResolutionResults: list<ConversationLevelSlotResolutionResultItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
