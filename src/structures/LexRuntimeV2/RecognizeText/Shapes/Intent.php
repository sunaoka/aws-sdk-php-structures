<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property array<string, Slot>|null $slots
 * @property 'Failed'|'Fulfilled'|'InProgress'|'ReadyForFulfillment'|'Waiting'|'FulfillmentInProgress'|null $state
 * @property 'Confirmed'|'Denied'|'None'|null $confirmationState
 */
class Intent extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     slots?: array<string, Slot>|null,
     *     state?: 'Failed'|'Fulfilled'|'InProgress'|'ReadyForFulfillment'|'Waiting'|'FulfillmentInProgress'|null,
     *     confirmationState?: 'Confirmed'|'Denied'|'None'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
