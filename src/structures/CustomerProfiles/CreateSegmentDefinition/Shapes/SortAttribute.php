<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'STRING'|'NUMBER'|'DATE'|null $DataType
 * @property 'ASC'|'DESC' $Order
 * @property 'PROFILE'|'CALCULATED'|null $Type
 */
class SortAttribute extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     DataType?: 'STRING'|'NUMBER'|'DATE'|null,
     *     Order: 'ASC'|'DESC',
     *     Type?: 'PROFILE'|'CALCULATED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
