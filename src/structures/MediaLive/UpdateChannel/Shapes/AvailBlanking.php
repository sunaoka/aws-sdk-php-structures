<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputLocation|null $AvailBlankingImage
 * @property 'DISABLED'|'ENABLED'|null $State
 */
class AvailBlanking extends Shape
{
    /**
     * @param array{
     *     AvailBlankingImage?: InputLocation|null,
     *     State?: 'DISABLED'|'ENABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
