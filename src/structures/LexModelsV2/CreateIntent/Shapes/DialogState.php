<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DialogAction $dialogAction
 * @property IntentOverride $intent
 * @property array<string, string> $sessionAttributes
 */
class DialogState extends Shape
{
    /**
     * @param array{
     *     dialogAction?: DialogAction,
     *     intent?: IntentOverride,
     *     sessionAttributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
