<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $pidResponseLength
 * @property int<0, max> $serviceMode
 * @property int<0, max> $pid
 * @property double $scaling
 * @property double $offset
 * @property int<0, max> $startByte
 * @property int<1, 8> $byteLength
 * @property int<0, max>|null $bitRightShift
 * @property int<1, 8>|null $bitMaskLength
 * @property bool|null $isSigned
 * @property 'INTEGER'|'FLOATING_POINT'|null $signalValueType
 */
class ObdSignal extends Shape
{
    /**
     * @param array{
     *     pidResponseLength: int<1, max>,
     *     serviceMode: int<0, max>,
     *     pid: int<0, max>,
     *     scaling: double,
     *     offset: double,
     *     startByte: int<0, max>,
     *     byteLength: int<1, 8>,
     *     bitRightShift?: int<0, max>|null,
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
