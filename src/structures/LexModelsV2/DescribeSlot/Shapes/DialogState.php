<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DialogAction|null $dialogAction
 * @property IntentOverride|null $intent
 * @property array<string, string>|null $sessionAttributes
 */
class DialogState extends Shape
{
    /**
     * @param array{
     *     dialogAction?: DialogAction|null,
     *     intent?: IntentOverride|null,
     *     sessionAttributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
