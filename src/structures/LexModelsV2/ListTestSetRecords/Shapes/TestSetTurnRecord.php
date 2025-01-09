<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $recordNumber
 * @property string $conversationId
 * @property int $turnNumber
 * @property TurnSpecification $turnSpecification
 */
class TestSetTurnRecord extends Shape
{
    /**
     * @param array{
     *     recordNumber: int,
     *     conversationId?: string,
     *     turnNumber?: int,
     *     turnSpecification: TurnSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
