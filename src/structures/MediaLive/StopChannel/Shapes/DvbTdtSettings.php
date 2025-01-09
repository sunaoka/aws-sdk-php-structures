<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1000, 30000> $RepInterval
 */
class DvbTdtSettings extends Shape
{
    /**
     * @param array{RepInterval?: int<1000, 30000>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
