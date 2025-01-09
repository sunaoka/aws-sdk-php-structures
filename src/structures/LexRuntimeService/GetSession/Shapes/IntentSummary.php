<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentName
 * @property string $checkpointLabel
 * @property array<string, string> $slots
 * @property 'None'|'Confirmed'|'Denied' $confirmationStatus
 * @property 'ElicitIntent'|'ConfirmIntent'|'ElicitSlot'|'Close'|'Delegate' $dialogActionType
 * @property 'Fulfilled'|'Failed'|'ReadyForFulfillment' $fulfillmentState
 * @property string $slotToElicit
 */
class IntentSummary extends Shape
{
    /**
     * @param array{
     *     intentName?: string,
     *     checkpointLabel?: string,
     *     slots?: array<string, string>,
     *     confirmationStatus?: 'None'|'Confirmed'|'Denied',
     *     dialogActionType: 'ElicitIntent'|'ConfirmIntent'|'ElicitSlot'|'Close'|'Delegate',
     *     fulfillmentState?: 'Fulfilled'|'Failed'|'ReadyForFulfillment',
     *     slotToElicit?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
