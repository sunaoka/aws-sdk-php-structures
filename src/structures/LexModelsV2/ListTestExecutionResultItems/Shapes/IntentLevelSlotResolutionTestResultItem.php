<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentName
 * @property bool $multiTurnConversation
 * @property list<SlotResolutionTestResultItem> $slotResolutionResults
 */
class IntentLevelSlotResolutionTestResultItem extends Shape
{
    /**
     * @param array{
     *     intentName: string,
     *     multiTurnConversation: bool,
     *     slotResolutionResults: list<SlotResolutionTestResultItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
