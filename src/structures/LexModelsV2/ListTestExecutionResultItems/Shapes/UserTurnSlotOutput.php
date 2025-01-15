<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $value
 * @property list<UserTurnSlotOutput>|null $values
 * @property array<string, UserTurnSlotOutput>|null $subSlots
 */
class UserTurnSlotOutput extends Shape
{
    /**
     * @param array{
     *     value?: string|null,
     *     values?: list<UserTurnSlotOutput>|null,
     *     subSlots?: array<string, UserTurnSlotOutput>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
