<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 */
class RcsTextMessage extends Shape
{
    /**
     * @param array{Body: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
