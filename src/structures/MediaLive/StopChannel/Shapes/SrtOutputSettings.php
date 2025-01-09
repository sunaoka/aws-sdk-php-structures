<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 10000> $BufferMsec
 * @property UdpContainerSettings $ContainerSettings
 * @property OutputLocationRef $Destination
 * @property 'AES128'|'AES192'|'AES256' $EncryptionType
 * @property int<40, 16000> $Latency
 */
class SrtOutputSettings extends Shape
{
    /**
     * @param array{
     *     BufferMsec?: int<0, 10000>,
     *     ContainerSettings: UdpContainerSettings,
     *     Destination: OutputLocationRef,
     *     EncryptionType?: 'AES128'|'AES192'|'AES256',
     *     Latency?: int<40, 16000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
