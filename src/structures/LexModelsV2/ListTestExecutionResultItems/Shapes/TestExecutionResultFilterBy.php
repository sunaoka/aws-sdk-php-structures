<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OverallTestResults'|'ConversationLevelTestResults'|'IntentClassificationTestResults'|'SlotResolutionTestResults'|'UtteranceLevelResults' $resultTypeFilter
 * @property ConversationLevelTestResultsFilterBy $conversationLevelTestResultsFilterBy
 */
class TestExecutionResultFilterBy extends Shape
{
    /**
     * @param array{
     *     resultTypeFilter: 'OverallTestResults'|'ConversationLevelTestResults'|'IntentClassificationTestResults'|'SlotResolutionTestResults'|'UtteranceLevelResults',
     *     conversationLevelTestResultsFilterBy?: ConversationLevelTestResultsFilterBy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
