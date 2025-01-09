<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HLS' $format
 */
class RecordingConfiguration extends Shape
{
    /**
     * @param array{format?: 'HLS'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
