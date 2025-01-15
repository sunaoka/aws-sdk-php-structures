<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 10000>|null $BufferMsec
 * @property UdpContainerSettings $ContainerSettings
 * @property OutputLocationRef $Destination
 * @property FecOutputSettings|null $FecOutputSettings
 */
class UdpOutputSettings extends Shape
{
    /**
     * @param array{
     *     BufferMsec?: int<0, 10000>|null,
     *     ContainerSettings: UdpContainerSettings,
     *     Destination: OutputLocationRef,
     *     FecOutputSettings?: FecOutputSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
