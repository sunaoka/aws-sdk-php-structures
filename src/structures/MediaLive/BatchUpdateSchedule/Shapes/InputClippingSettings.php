<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ZEROBASED'|'EMBEDDED' $InputTimecodeSource
 * @property StartTimecode $StartTimecode
 * @property StopTimecode $StopTimecode
 */
class InputClippingSettings extends Shape
{
    /**
     * @param array{
     *     InputTimecodeSource: 'ZEROBASED'|'EMBEDDED',
     *     StartTimecode?: StartTimecode,
     *     StopTimecode?: StopTimecode
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
