<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 200000> $recordNumber
 * @property string $conversationId
 * @property TestSetTurnResult $turnResult
 */
class UtteranceLevelTestResultItem extends Shape
{
    /**
     * @param array{
     *     recordNumber: int<1, 200000>,
     *     conversationId?: string,
     *     turnResult: TestSetTurnResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
