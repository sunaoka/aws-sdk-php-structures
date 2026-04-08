<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MediaConnectRouterOutputConnectionMap|null $ConnectedRouterInputs
 * @property MediaConnectRouterContainerSettings $ContainerSettings
 * @property OutputLocationRef $Destination
 */
class MediaConnectRouterOutputSettings extends Shape
{
    /**
     * @param array{
     *     ConnectedRouterInputs?: MediaConnectRouterOutputConnectionMap|null,
     *     ContainerSettings: MediaConnectRouterContainerSettings,
     *     Destination: OutputLocationRef
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
