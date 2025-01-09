<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property array<string, Slot> $slots
 * @property 'Failed'|'Fulfilled'|'InProgress'|'ReadyForFulfillment'|'Waiting'|'FulfillmentInProgress' $state
 * @property 'Confirmed'|'Denied'|'None' $confirmationState
 */
class Intent extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     slots?: array<string, Slot>,
     *     state?: 'Failed'|'Fulfilled'|'InProgress'|'ReadyForFulfillment'|'Waiting'|'FulfillmentInProgress',
     *     confirmationState?: 'Confirmed'|'Denied'|'None'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
