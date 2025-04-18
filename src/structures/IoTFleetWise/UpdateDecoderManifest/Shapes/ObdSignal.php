<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2147483647> $pidResponseLength
 * @property int<0, 2147483647> $serviceMode
 * @property int<0, 2147483647> $pid
 * @property double $scaling
 * @property double $offset
 * @property int<0, 2147483647> $startByte
 * @property int<1, 8> $byteLength
 * @property int<0, 2147483647>|null $bitRightShift
 * @property int<1, 8>|null $bitMaskLength
 * @property bool|null $isSigned
 * @property 'INTEGER'|'FLOATING_POINT'|null $signalValueType
 */
class ObdSignal extends Shape
{
    /**
     * @param array{
     *     pidResponseLength: int<1, 2147483647>,
     *     serviceMode: int<0, 2147483647>,
     *     pid: int<0, 2147483647>,
     *     scaling: double,
     *     offset: double,
     *     startByte: int<0, 2147483647>,
     *     byteLength: int<1, 8>,
     *     bitRightShift?: int<0, 2147483647>|null,
     *     bitMaskLength?: int<1, 8>|null,
     *     isSigned?: bool|null,
     *     signalValueType?: 'INTEGER'|'FLOATING_POINT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
