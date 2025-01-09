<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioConfiguration $audio
 * @property VideoConfiguration $video
 */
class IngestConfiguration extends Shape
{
    /**
     * @param array{
     *     audio?: AudioConfiguration,
     *     video?: VideoConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
