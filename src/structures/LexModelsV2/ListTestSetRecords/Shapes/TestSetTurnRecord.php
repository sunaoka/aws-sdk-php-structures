<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 200000> $recordNumber
 * @property string|null $conversationId
 * @property int<0, 30>|null $turnNumber
 * @property TurnSpecification $turnSpecification
 */
class TestSetTurnRecord extends Shape
{
    /**
     * @param array{
     *     recordNumber: int<1, 200000>,
     *     conversationId?: string|null,
     *     turnNumber?: int<0, 30>|null,
     *     turnSpecification: TurnSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
