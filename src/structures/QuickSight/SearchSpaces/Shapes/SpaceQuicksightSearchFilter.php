<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SPACE_ID'|'SPACE_NAME'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'CONTRIBUTED_BY'|'CONSUMED_SOURCE_SIZE'|'CREATED_BY' $name
 * @property 'STRING_EQUALS'|'STRING_LIKE'|'NUMBER_RANGE' $operator
 * @property string $value
 */
class SpaceQuicksightSearchFilter extends Shape
{
    /**
     * @param array{
     *     name: 'SPACE_ID'|'SPACE_NAME'|'DIRECT_QUICKSIGHT_OWNER'|'DIRECT_QUICKSIGHT_VIEWER_OR_OWNER'|'DIRECT_QUICKSIGHT_SOLE_OWNER'|'CONTRIBUTED_BY'|'CONSUMED_SOURCE_SIZE'|'CREATED_BY',
     *     operator: 'STRING_EQUALS'|'STRING_LIKE'|'NUMBER_RANGE',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
