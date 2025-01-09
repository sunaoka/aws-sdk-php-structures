<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentName
 * @property bool $multiTurnConversation
 * @property IntentClassificationTestResultItemCounts $resultCounts
 */
class IntentClassificationTestResultItem extends Shape
{
    /**
     * @param array{
     *     intentName: string,
     *     multiTurnConversation: bool,
     *     resultCounts: IntentClassificationTestResultItemCounts
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
