<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateCalculatedAttributeDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'ANY'|'NONE' $Include
 * @property list<FilterGroup> $Groups
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Include: 'ALL'|'ANY'|'NONE',
     *     Groups: list<FilterGroup>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
