<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeMultiRegionParameterGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Family
 * @property string|null $Description
 * @property string|null $ARN
 */
class MultiRegionParameterGroup extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Family?: string|null,
     *     Description?: string|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
