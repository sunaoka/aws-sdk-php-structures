<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Format
 * @property string $StartDate
 * @property string $EndDate
 * @property string $Limit
 * @property string $Marker
 */
class InventoryRetrievalJobDescription extends Shape
{
    /**
     * @param array{
     *     Format?: string,
     *     StartDate?: string,
     *     EndDate?: string,
     *     Limit?: string,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
