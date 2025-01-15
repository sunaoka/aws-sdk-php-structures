<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OverallTestResults|null $overallTestResults
 * @property ConversationLevelTestResults|null $conversationLevelTestResults
 * @property IntentClassificationTestResults|null $intentClassificationTestResults
 * @property IntentLevelSlotResolutionTestResults|null $intentLevelSlotResolutionTestResults
 * @property UtteranceLevelTestResults|null $utteranceLevelTestResults
 */
class TestExecutionResultItems extends Shape
{
    /**
     * @param array{
     *     overallTestResults?: OverallTestResults|null,
     *     conversationLevelTestResults?: ConversationLevelTestResults|null,
     *     intentClassificationTestResults?: IntentClassificationTestResults|null,
     *     intentLevelSlotResolutionTestResults?: IntentLevelSlotResolutionTestResults|null,
     *     utteranceLevelTestResults?: UtteranceLevelTestResults|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
