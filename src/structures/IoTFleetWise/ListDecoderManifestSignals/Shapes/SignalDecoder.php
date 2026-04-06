<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestSignals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fullyQualifiedName
 * @property 'CAN_SIGNAL'|'OBD_SIGNAL'|'MESSAGE_SIGNAL' $type
 * @property string $interfaceId
 * @property CanSignal|null $canSignal
 * @property ObdSignal|null $obdSignal
 * @property MessageSignal|null $messageSignal
 */
class SignalDecoder extends Shape
{
    /**
     * @param array{
     *     fullyQualifiedName: string,
     *     type: 'CAN_SIGNAL'|'OBD_SIGNAL'|'MESSAGE_SIGNAL',
     *     interfaceId: string,
     *     canSignal?: CanSignal|null,
     *     obdSignal?: ObdSignal|null,
     *     messageSignal?: MessageSignal|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
