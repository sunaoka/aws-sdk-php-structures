<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPlaybackConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndUrl
 * @property string|null $StartUrl
 */
class Bumper extends Shape
{
    /**
     * @param array{
     *     EndUrl?: string|null,
     *     StartUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
