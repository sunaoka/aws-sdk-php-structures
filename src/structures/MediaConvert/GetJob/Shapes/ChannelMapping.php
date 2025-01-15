<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OutputChannelMapping>|null $OutputChannels
 */
class ChannelMapping extends Shape
{
    /**
     * @param array{OutputChannels?: list<OutputChannelMapping>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
