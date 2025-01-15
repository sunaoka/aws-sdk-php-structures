<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PutSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ElicitIntent'|'ConfirmIntent'|'ElicitSlot'|'Close'|'Delegate' $type
 * @property string|null $intentName
 * @property array<string, string>|null $slots
 * @property string|null $slotToElicit
 * @property 'Fulfilled'|'Failed'|'ReadyForFulfillment'|null $fulfillmentState
 * @property string|null $message
 * @property 'PlainText'|'CustomPayload'|'SSML'|'Composite'|null $messageFormat
 */
class DialogAction extends Shape
{
    /**
     * @param array{
     *     type: 'ElicitIntent'|'ConfirmIntent'|'ElicitSlot'|'Close'|'Delegate',
     *     intentName?: string|null,
     *     slots?: array<string, string>|null,
     *     slotToElicit?: string|null,
     *     fulfillmentState?: 'Fulfilled'|'Failed'|'ReadyForFulfillment'|null,
     *     message?: string|null,
     *     messageFormat?: 'PlainText'|'CustomPayload'|'SSML'|'Composite'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
