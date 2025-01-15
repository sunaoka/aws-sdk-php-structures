<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\PutSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Close'|'ConfirmIntent'|'Delegate'|'ElicitIntent'|'ElicitSlot'|'None' $type
 * @property string|null $slotToElicit
 * @property 'Default'|'SpellByLetter'|'SpellByWord'|null $slotElicitationStyle
 * @property ElicitSubSlot|null $subSlotToElicit
 */
class DialogAction extends Shape
{
    /**
     * @param array{
     *     type: 'Close'|'ConfirmIntent'|'Delegate'|'ElicitIntent'|'ElicitSlot'|'None',
     *     slotToElicit?: string|null,
     *     slotElicitationStyle?: 'Default'|'SpellByLetter'|'SpellByWord'|null,
     *     subSlotToElicit?: ElicitSubSlot|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
