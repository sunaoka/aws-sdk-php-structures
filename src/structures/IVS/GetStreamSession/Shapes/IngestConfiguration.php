<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioConfiguration|null $audio
 * @property VideoConfiguration|null $video
 */
class IngestConfiguration extends Shape
{
    /**
     * @param array{
     *     audio?: AudioConfiguration|null,
     *     video?: VideoConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
