<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property array<string, UserTurnSlotOutput> $slots
 */
class UserTurnIntentOutput extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     slots?: array<string, UserTurnSlotOutput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
