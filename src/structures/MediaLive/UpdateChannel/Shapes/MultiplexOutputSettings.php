<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputLocationRef $Destination
 * @property MultiplexContainerSettings $ContainerSettings
 */
class MultiplexOutputSettings extends Shape
{
    /**
     * @param array{
     *     Destination: OutputLocationRef,
     *     ContainerSettings?: MultiplexContainerSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
