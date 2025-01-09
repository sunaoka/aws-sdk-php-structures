<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fullyQualifiedName
 * @property 'CAN_SIGNAL'|'OBD_SIGNAL'|'MESSAGE_SIGNAL'|'CUSTOM_DECODING_SIGNAL' $type
 * @property string $interfaceId
 * @property CanSignal $canSignal
 * @property ObdSignal $obdSignal
 * @property MessageSignal $messageSignal
 * @property CustomDecodingSignal $customDecodingSignal
 */
class SignalDecoder extends Shape
{
    /**
     * @param array{
     *     fullyQualifiedName: string,
     *     type: 'CAN_SIGNAL'|'OBD_SIGNAL'|'MESSAGE_SIGNAL'|'CUSTOM_DECODING_SIGNAL',
     *     interfaceId: string,
     *     canSignal?: CanSignal,
     *     obdSignal?: ObdSignal,
     *     messageSignal?: MessageSignal,
     *     customDecodingSignal?: CustomDecodingSignal
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
