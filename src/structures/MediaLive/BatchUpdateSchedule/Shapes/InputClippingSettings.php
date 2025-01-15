<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ZEROBASED'|'EMBEDDED' $InputTimecodeSource
 * @property StartTimecode|null $StartTimecode
 * @property StopTimecode|null $StopTimecode
 */
class InputClippingSettings extends Shape
{
    /**
     * @param array{
     *     InputTimecodeSource: 'ZEROBASED'|'EMBEDDED',
     *     StartTimecode?: StartTimecode|null,
     *     StopTimecode?: StopTimecode|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
