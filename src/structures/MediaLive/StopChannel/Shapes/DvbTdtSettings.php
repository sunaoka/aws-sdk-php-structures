<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $RepInterval
 */
class DvbTdtSettings extends Shape
{
    /**
     * @param array{RepInterval?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
