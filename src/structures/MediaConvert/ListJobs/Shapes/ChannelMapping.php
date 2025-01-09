<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OutputChannelMapping> $OutputChannels
 */
class ChannelMapping extends Shape
{
    /**
     * @param array{OutputChannels?: list<OutputChannelMapping>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
