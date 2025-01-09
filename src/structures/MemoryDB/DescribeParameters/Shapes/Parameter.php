<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Value
 * @property string $Description
 * @property string $DataType
 * @property string $AllowedValues
 * @property string $MinimumEngineVersion
 */
class Parameter extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Value?: string,
     *     Description?: string,
     *     DataType?: string,
     *     AllowedValues?: string,
     *     MinimumEngineVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
