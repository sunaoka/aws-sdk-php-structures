<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputLocationRef $Destination
 */
class AdditionalDestinations extends Shape
{
    /**
     * @param array{Destination: OutputLocationRef} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
