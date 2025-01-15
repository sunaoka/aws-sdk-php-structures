<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property array<string, UserTurnSlotOutput>|null $slots
 */
class UserTurnIntentOutput extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     slots?: array<string, UserTurnSlotOutput>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
