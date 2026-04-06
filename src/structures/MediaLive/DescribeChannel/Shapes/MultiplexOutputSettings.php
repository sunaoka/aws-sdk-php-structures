<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputLocationRef $Destination
 * @property MultiplexContainerSettings|null $ContainerSettings
 */
class MultiplexOutputSettings extends Shape
{
    /**
     * @param array{
     *     Destination: OutputLocationRef,
     *     ContainerSettings?: MultiplexContainerSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
