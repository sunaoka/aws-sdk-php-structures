<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZoneName
 */
class RouterDestinationSettings extends Shape
{
    /**
     * @param array{AvailabilityZoneName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
