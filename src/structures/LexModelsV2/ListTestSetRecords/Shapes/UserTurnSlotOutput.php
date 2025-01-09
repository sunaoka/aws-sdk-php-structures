<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property list<UserTurnSlotOutput> $values
 * @property array<string, UserTurnSlotOutput> $subSlots
 */
class UserTurnSlotOutput extends Shape
{
    /**
     * @param array{
     *     value?: string,
     *     values?: list<UserTurnSlotOutput>,
     *     subSlots?: array<string, UserTurnSlotOutput>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
