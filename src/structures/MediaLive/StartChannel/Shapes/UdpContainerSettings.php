<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property M2tsSettings|null $M2tsSettings
 */
class UdpContainerSettings extends Shape
{
    /**
     * @param array{M2tsSettings?: M2tsSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
