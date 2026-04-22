<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VideoConfiguration> $videoConfigurations
 * @property list<AudioConfiguration> $audioConfigurations
 */
class IngestConfigurations extends Shape
{
    /**
     * @param array{
     *     videoConfigurations: list<VideoConfiguration>,
     *     audioConfigurations: list<AudioConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
