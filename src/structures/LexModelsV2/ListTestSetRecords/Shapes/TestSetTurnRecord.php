<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 200000> $recordNumber
 * @property string $conversationId
 * @property int<0, 30> $turnNumber
 * @property TurnSpecification $turnSpecification
 */
class TestSetTurnRecord extends Shape
{
    /**
     * @param array{
     *     recordNumber: int<1, 200000>,
     *     conversationId?: string,
     *     turnNumber?: int<0, 30>,
     *     turnSpecification: TurnSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
