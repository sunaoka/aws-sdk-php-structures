<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BufferMsec
 * @property UdpContainerSettings $ContainerSettings
 * @property OutputLocationRef $Destination
 * @property FecOutputSettings $FecOutputSettings
 */
class UdpOutputSettings extends Shape
{
    /**
     * @param array{
     *     BufferMsec?: int,
     *     ContainerSettings: UdpContainerSettings,
     *     Destination: OutputLocationRef,
     *     FecOutputSettings?: FecOutputSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
