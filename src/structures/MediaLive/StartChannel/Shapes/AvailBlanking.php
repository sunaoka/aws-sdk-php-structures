<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputLocation $AvailBlankingImage
 * @property 'DISABLED'|'ENABLED' $State
 */
class AvailBlanking extends Shape
{
    /**
     * @param array{
     *     AvailBlankingImage?: InputLocation,
     *     State?: 'DISABLED'|'ENABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
