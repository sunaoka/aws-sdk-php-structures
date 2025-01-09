<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MultiplexM2tsSettings $MultiplexM2tsSettings
 */
class MultiplexContainerSettings extends Shape
{
    /**
     * @param array{MultiplexM2tsSettings?: MultiplexM2tsSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
