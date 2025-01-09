<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DROP_PROGRAM'|'DROP_TS'|'EMIT_PROGRAM' $InputLossAction
 */
class SrtGroupSettings extends Shape
{
    /**
     * @param array{InputLossAction?: 'DROP_PROGRAM'|'DROP_TS'|'EMIT_PROGRAM'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
