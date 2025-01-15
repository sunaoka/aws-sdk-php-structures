<?php

namespace Sunaoka\Aws\Structures\Rds\CreateOptionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Value
 * @property string|null $DefaultValue
 * @property string|null $Description
 * @property string|null $ApplyType
 * @property string|null $DataType
 * @property string|null $AllowedValues
 * @property bool|null $IsModifiable
 * @property bool|null $IsCollection
 */
class OptionSetting extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Value?: string|null,
     *     DefaultValue?: string|null,
     *     Description?: string|null,
     *     ApplyType?: string|null,
     *     DataType?: string|null,
     *     AllowedValues?: string|null,
     *     IsModifiable?: bool|null,
     *     IsCollection?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
