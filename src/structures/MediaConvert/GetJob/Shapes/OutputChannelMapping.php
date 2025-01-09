<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $InputChannels
 * @property list<double> $InputChannelsFineTune
 */
class OutputChannelMapping extends Shape
{
    /**
     * @param array{
     *     InputChannels?: list<int>,
     *     InputChannelsFineTune?: list<double>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
