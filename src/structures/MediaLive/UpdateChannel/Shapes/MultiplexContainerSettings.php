<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MultiplexM2tsSettings|null $MultiplexM2tsSettings
 */
class MultiplexContainerSettings extends Shape
{
    /**
     * @param array{MultiplexM2tsSettings?: MultiplexM2tsSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
