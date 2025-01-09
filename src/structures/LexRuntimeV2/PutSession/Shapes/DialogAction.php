<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\PutSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Close'|'ConfirmIntent'|'Delegate'|'ElicitIntent'|'ElicitSlot'|'None' $type
 * @property string $slotToElicit
 * @property 'Default'|'SpellByLetter'|'SpellByWord' $slotElicitationStyle
 * @property ElicitSubSlot $subSlotToElicit
 */
class DialogAction extends Shape
{
    /**
     * @param array{
     *     type: 'Close'|'ConfirmIntent'|'Delegate'|'ElicitIntent'|'ElicitSlot'|'None',
     *     slotToElicit?: string,
     *     slotElicitationStyle?: 'Default'|'SpellByLetter'|'SpellByWord',
     *     subSlotToElicit?: ElicitSubSlot
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
