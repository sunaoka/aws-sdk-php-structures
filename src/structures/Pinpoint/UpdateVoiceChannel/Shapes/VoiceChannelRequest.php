<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateVoiceChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 */
class VoiceChannelRequest extends Shape
{
    /**
     * @param array{Enabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
