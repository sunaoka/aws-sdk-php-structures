<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRENGTH_1'|'STRENGTH_2' $Strength
 */
class PerceptualFilterSettings extends Shape
{
    /**
     * @param array{Strength: 'STRENGTH_1'|'STRENGTH_2'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
