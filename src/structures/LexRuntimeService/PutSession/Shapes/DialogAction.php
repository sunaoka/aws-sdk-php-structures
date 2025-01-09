<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PutSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ElicitIntent'|'ConfirmIntent'|'ElicitSlot'|'Close'|'Delegate' $type
 * @property string $intentName
 * @property array<string, string> $slots
 * @property string $slotToElicit
 * @property 'Fulfilled'|'Failed'|'ReadyForFulfillment' $fulfillmentState
 * @property string $message
 * @property 'PlainText'|'CustomPayload'|'SSML'|'Composite' $messageFormat
 */
class DialogAction extends Shape
{
    /**
     * @param array{
     *     type: 'ElicitIntent'|'ConfirmIntent'|'ElicitSlot'|'Close'|'Delegate',
     *     intentName?: string,
     *     slots?: array<string, string>,
     *     slotToElicit?: string,
     *     fulfillmentState?: 'Fulfilled'|'Failed'|'ReadyForFulfillment',
     *     message?: string,
     *     messageFormat?: 'PlainText'|'CustomPayload'|'SSML'|'Composite'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
