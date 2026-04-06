<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetCalculatedAttributeDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'ANY'|'NONE' $Type
 * @property list<FilterDimension> $Dimensions
 */
class FilterGroup extends Shape
{
    /**
     * @param array{
     *     Type: 'ALL'|'ANY'|'NONE',
     *     Dimensions: list<FilterDimension>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
