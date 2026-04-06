<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioConfiguration> $audioConfigurations
 * @property list<VideoConfiguration> $videoConfigurations
 */
class IngestConfigurations extends Shape
{
    /**
     * @param array{
     *     audioConfigurations: list<AudioConfiguration>,
     *     videoConfigurations: list<VideoConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
