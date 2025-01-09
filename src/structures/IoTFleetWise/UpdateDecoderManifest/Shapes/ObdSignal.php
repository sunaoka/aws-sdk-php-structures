<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $pidResponseLength
 * @property int $serviceMode
 * @property int $pid
 * @property double $scaling
 * @property double $offset
 * @property int $startByte
 * @property int $byteLength
 * @property int $bitRightShift
 * @property int $bitMaskLength
 */
class ObdSignal extends Shape
{
    /**
     * @param array{
     *     pidResponseLength: int,
     *     serviceMode: int,
     *     pid: int,
     *     scaling: double,
     *     offset: double,
     *     startByte: int,
     *     byteLength: int,
     *     bitRightShift?: int,
     *     bitMaskLength?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
