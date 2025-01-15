<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Group>|null $Groups
 * @property 'ALL'|'ANY'|'NONE'|null $Include
 */
class SegmentGroupStructure extends Shape
{
    /**
     * @param array{
     *     Groups?: list<Group>|null,
     *     Include?: 'ALL'|'ANY'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
