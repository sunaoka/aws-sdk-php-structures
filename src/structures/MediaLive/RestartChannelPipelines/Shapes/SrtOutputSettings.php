<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 10000>|null $BufferMsec
 * @property UdpContainerSettings $ContainerSettings
 * @property OutputLocationRef $Destination
 * @property 'AES128'|'AES192'|'AES256'|null $EncryptionType
 * @property int<40, 16000>|null $Latency
 */
class SrtOutputSettings extends Shape
{
    /**
     * @param array{
     *     BufferMsec?: int<0, 10000>|null,
     *     ContainerSettings: UdpContainerSettings,
     *     Destination: OutputLocationRef,
     *     EncryptionType?: 'AES128'|'AES192'|'AES256'|null,
     *     Latency?: int<40, 16000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
