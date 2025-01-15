<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $intentName
 * @property string|null $checkpointLabel
 * @property array<string, string>|null $slots
 * @property 'None'|'Confirmed'|'Denied'|null $confirmationStatus
 * @property 'ElicitIntent'|'ConfirmIntent'|'ElicitSlot'|'Close'|'Delegate' $dialogActionType
 * @property 'Fulfilled'|'Failed'|'ReadyForFulfillment'|null $fulfillmentState
 * @property string|null $slotToElicit
 */
class IntentSummary extends Shape
{
    /**
     * @param array{
     *     intentName?: string|null,
     *     checkpointLabel?: string|null,
     *     slots?: array<string, string>|null,
     *     confirmationStatus?: 'None'|'Confirmed'|'Denied'|null,
     *     dialogActionType: 'ElicitIntent'|'ConfirmIntent'|'ElicitSlot'|'Close'|'Delegate',
     *     fulfillmentState?: 'Fulfilled'|'Failed'|'ReadyForFulfillment'|null,
     *     slotToElicit?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
