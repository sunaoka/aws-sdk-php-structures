<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $messageId
 * @property bool $isBigEndian
 * @property bool $isSigned
 * @property int<0, max> $startBit
 * @property double $offset
 * @property double $factor
 * @property int<0, max> $length
 * @property string|null $name
 * @property 'INTEGER'|'FLOATING_POINT'|null $signalValueType
 */
class CanSignal extends Shape
{
    /**
     * @param array{
     *     messageId: int<0, max>,
     *     isBigEndian: bool,
     *     isSigned: bool,
     *     startBit: int<0, max>,
     *     offset: double,
     *     factor: double,
     *     length: int<0, max>,
     *     name?: string|null,
     *     signalValueType?: 'INTEGER'|'FLOATING_POINT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
