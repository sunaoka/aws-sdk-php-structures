<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HR_24'|'DAY_7'|'DAY_14'|'DAY_30' $Duration
 * @property 'ACTIVE'|'INACTIVE' $RecencyType
 */
class RecencyDimension extends Shape
{
    /**
     * @param array{
     *     Duration: 'HR_24'|'DAY_7'|'DAY_14'|'DAY_30',
     *     RecencyType: 'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
