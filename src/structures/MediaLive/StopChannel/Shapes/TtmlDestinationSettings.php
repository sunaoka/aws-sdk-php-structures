<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PASSTHROUGH'|'USE_CONFIGURED' $StyleControl
 */
class TtmlDestinationSettings extends Shape
{
    /**
     * @param array{StyleControl?: 'PASSTHROUGH'|'USE_CONFIGURED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
