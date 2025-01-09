<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OverallTestResults $overallTestResults
 * @property ConversationLevelTestResults $conversationLevelTestResults
 * @property IntentClassificationTestResults $intentClassificationTestResults
 * @property IntentLevelSlotResolutionTestResults $intentLevelSlotResolutionTestResults
 * @property UtteranceLevelTestResults $utteranceLevelTestResults
 */
class TestExecutionResultItems extends Shape
{
    /**
     * @param array{
     *     overallTestResults?: OverallTestResults,
     *     conversationLevelTestResults?: ConversationLevelTestResults,
     *     intentClassificationTestResults?: IntentClassificationTestResults,
     *     intentLevelSlotResolutionTestResults?: IntentLevelSlotResolutionTestResults,
     *     utteranceLevelTestResults?: UtteranceLevelTestResults
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
