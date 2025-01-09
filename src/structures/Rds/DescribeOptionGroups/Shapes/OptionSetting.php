<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Value
 * @property string $DefaultValue
 * @property string $Description
 * @property string $ApplyType
 * @property string $DataType
 * @property string $AllowedValues
 * @property bool $IsModifiable
 * @property bool $IsCollection
 */
class OptionSetting extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Value?: string,
     *     DefaultValue?: string,
     *     Description?: string,
     *     ApplyType?: string,
     *     DataType?: string,
     *     AllowedValues?: string,
     *     IsModifiable?: bool,
     *     IsCollection?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
