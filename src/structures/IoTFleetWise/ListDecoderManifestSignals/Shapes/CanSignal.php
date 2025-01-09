<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestSignals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $messageId
 * @property bool $isBigEndian
 * @property bool $isSigned
 * @property int $startBit
 * @property double $offset
 * @property double $factor
 * @property int $length
 * @property string $name
 */
class CanSignal extends Shape
{
    /**
     * @param array{
     *     messageId: int,
     *     isBigEndian: bool,
     *     isSigned: bool,
     *     startBit: int,
     *     offset: double,
     *     factor: double,
     *     length: int,
     *     name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
