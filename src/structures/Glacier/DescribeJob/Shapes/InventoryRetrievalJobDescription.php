<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Format
 * @property string|null $StartDate
 * @property string|null $EndDate
 * @property string|null $Limit
 * @property string|null $Marker
 */
class InventoryRetrievalJobDescription extends Shape
{
    /**
     * @param array{
     *     Format?: string|null,
     *     StartDate?: string|null,
     *     EndDate?: string|null,
     *     Limit?: string|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
