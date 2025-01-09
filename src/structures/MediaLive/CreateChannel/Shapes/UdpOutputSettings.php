<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 10000> $BufferMsec
 * @property UdpContainerSettings $ContainerSettings
 * @property OutputLocationRef $Destination
 * @property FecOutputSettings $FecOutputSettings
 */
class UdpOutputSettings extends Shape
{
    /**
     * @param array{
     *     BufferMsec?: int<0, 10000>,
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
