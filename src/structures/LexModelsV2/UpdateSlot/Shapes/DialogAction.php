<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ElicitIntent'|'StartIntent'|'ElicitSlot'|'EvaluateConditional'|'InvokeDialogCodeHook'|'ConfirmIntent'|'FulfillIntent'|'CloseIntent'|'EndConversation' $type
 * @property string|null $slotToElicit
 * @property bool|null $suppressNextMessage
 */
class DialogAction extends Shape
{
    /**
     * @param array{
     *     type: 'ElicitIntent'|'StartIntent'|'ElicitSlot'|'EvaluateConditional'|'InvokeDialogCodeHook'|'ConfirmIntent'|'FulfillIntent'|'CloseIntent'|'EndConversation',
     *     slotToElicit?: string|null,
     *     suppressNextMessage?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
