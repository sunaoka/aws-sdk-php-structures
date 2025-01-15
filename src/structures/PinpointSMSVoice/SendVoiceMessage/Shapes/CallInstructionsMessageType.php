<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\SendVoiceMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Text
 */
class CallInstructionsMessageType extends Shape
{
    /**
     * @param array{Text?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
