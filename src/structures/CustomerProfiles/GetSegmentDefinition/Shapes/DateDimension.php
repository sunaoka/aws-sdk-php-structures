<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BEFORE'|'AFTER'|'BETWEEN'|'NOT_BETWEEN'|'ON' $DimensionType
 * @property list<string> $Values
 */
class DateDimension extends Shape
{
    /**
     * @param array{
     *     DimensionType: 'BEFORE'|'AFTER'|'BETWEEN'|'NOT_BETWEEN'|'ON',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
