<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int<-60, 6>> $InputChannels
 * @property list<double> $InputChannelsFineTune
 */
class OutputChannelMapping extends Shape
{
    /**
     * @param array{
     *     InputChannels?: list<int<-60, 6>>,
     *     InputChannelsFineTune?: list<double>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
