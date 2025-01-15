<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int<-60, 6>>|null $InputChannels
 * @property list<double>|null $InputChannelsFineTune
 */
class OutputChannelMapping extends Shape
{
    /**
     * @param array{
     *     InputChannels?: list<int<-60, 6>>|null,
     *     InputChannelsFineTune?: list<double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
