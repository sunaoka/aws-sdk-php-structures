<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Scte35EsamPid
 */
class M2tsScte35Esam extends Shape
{
    /**
     * @param array{Scte35EsamPid?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
