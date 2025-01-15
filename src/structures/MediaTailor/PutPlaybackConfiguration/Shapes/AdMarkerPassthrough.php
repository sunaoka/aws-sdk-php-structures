<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 */
class AdMarkerPassthrough extends Shape
{
    /**
     * @param array{Enabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
