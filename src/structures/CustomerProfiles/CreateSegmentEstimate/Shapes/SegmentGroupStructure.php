<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Group> $Groups
 * @property 'ALL'|'ANY'|'NONE' $Include
 */
class SegmentGroupStructure extends Shape
{
    /**
     * @param array{
     *     Groups?: list<Group>,
     *     Include?: 'ALL'|'ANY'|'NONE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
