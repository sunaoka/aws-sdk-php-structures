<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BufferMsec
 * @property UdpContainerSettings $ContainerSettings
 * @property OutputLocationRef $Destination
 * @property 'AES128'|'AES192'|'AES256'|null $EncryptionType
 * @property int|null $Latency
 */
class SrtOutputSettings extends Shape
{
    /**
     * @param array{
     *     BufferMsec?: int|null,
     *     ContainerSettings: UdpContainerSettings,
     *     Destination: OutputLocationRef,
     *     EncryptionType?: 'AES128'|'AES192'|'AES256'|null,
     *     Latency?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
