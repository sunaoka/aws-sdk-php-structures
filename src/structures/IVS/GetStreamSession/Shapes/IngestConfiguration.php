<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoConfiguration|null $video
 * @property AudioConfiguration|null $audio
 */
class IngestConfiguration extends Shape
{
    /**
     * @param array{
     *     video?: VideoConfiguration|null,
     *     audio?: AudioConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
