<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeMultiRegionParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Value
 * @property string|null $Description
 * @property string|null $Source
 * @property string|null $DataType
 * @property string|null $AllowedValues
 * @property string|null $MinimumEngineVersion
 */
class MultiRegionParameter extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Value?: string|null,
     *     Description?: string|null,
     *     Source?: string|null,
     *     DataType?: string|null,
     *     AllowedValues?: string|null,
     *     MinimumEngineVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
