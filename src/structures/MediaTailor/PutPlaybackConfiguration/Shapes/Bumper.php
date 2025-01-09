<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndUrl
 * @property string $StartUrl
 */
class Bumper extends Shape
{
    /**
     * @param array{
     *     EndUrl?: string,
     *     StartUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
