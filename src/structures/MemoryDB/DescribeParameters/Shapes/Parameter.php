<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Value
 * @property string|null $Description
 * @property string|null $DataType
 * @property string|null $AllowedValues
 * @property string|null $MinimumEngineVersion
 */
class Parameter extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Value?: string|null,
     *     Description?: string|null,
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
