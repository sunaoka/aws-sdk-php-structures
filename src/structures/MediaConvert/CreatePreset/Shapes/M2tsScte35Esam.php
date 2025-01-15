<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<32, 8182>|null $Scte35EsamPid
 */
class M2tsScte35Esam extends Shape
{
    /**
     * @param array{Scte35EsamPid?: int<32, 8182>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
