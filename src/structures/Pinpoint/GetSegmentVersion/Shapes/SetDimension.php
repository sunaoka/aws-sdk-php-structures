<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUSIVE'|'EXCLUSIVE' $DimensionType
 * @property list<string> $Values
 */
class SetDimension extends Shape
{
    /**
     * @param array{
     *     DimensionType?: 'INCLUSIVE'|'EXCLUSIVE',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
