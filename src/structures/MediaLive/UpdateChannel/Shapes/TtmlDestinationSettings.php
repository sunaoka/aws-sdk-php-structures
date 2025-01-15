<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PASSTHROUGH'|'USE_CONFIGURED'|null $StyleControl
 */
class TtmlDestinationSettings extends Shape
{
    /**
     * @param array{StyleControl?: 'PASSTHROUGH'|'USE_CONFIGURED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
