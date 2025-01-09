<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentName
 * @property string $slotName
 * @property 'Matched'|'Mismatched'|'ExecutionError' $matchResult
 */
class ConversationLevelSlotResolutionResultItem extends Shape
{
    /**
     * @param array{
     *     intentName: string,
     *     slotName: string,
     *     matchResult: 'Matched'|'Mismatched'|'ExecutionError'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
