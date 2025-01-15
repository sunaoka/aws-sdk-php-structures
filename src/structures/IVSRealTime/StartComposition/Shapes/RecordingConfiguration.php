<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HLS'|null $format
 */
class RecordingConfiguration extends Shape
{
    /**
     * @param array{format?: 'HLS'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
