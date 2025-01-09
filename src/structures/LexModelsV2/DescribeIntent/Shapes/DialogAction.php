<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ElicitIntent'|'StartIntent'|'ElicitSlot'|'EvaluateConditional'|'InvokeDialogCodeHook'|'ConfirmIntent'|'FulfillIntent'|'CloseIntent'|'EndConversation' $type
 * @property string $slotToElicit
 * @property bool $suppressNextMessage
 */
class DialogAction extends Shape
{
    /**
     * @param array{
     *     type: 'ElicitIntent'|'StartIntent'|'ElicitSlot'|'EvaluateConditional'|'InvokeDialogCodeHook'|'ConfirmIntent'|'FulfillIntent'|'CloseIntent'|'EndConversation',
     *     slotToElicit?: string,
     *     suppressNextMessage?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
