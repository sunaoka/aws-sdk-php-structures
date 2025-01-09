<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BufferMsec
 * @property UdpContainerSettings $ContainerSettings
 * @property OutputLocationRef $Destination
 * @property 'AES128'|'AES192'|'AES256' $EncryptionType
 * @property int $Latency
 */
class SrtOutputSettings extends Shape
{
    /**
     * @param array{
     *     BufferMsec?: int,
     *     ContainerSettings: UdpContainerSettings,
     *     Destination: OutputLocationRef,
     *     EncryptionType?: 'AES128'|'AES192'|'AES256',
     *     Latency?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
