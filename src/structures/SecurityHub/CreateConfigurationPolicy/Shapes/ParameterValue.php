<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConfigurationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Integer
 * @property list<int>|null $IntegerList
 * @property double|null $Double
 * @property string|null $String
 * @property list<string>|null $StringList
 * @property bool|null $Boolean
 * @property string|null $Enum
 * @property list<string>|null $EnumList
 */
class ParameterValue extends Shape
{
    /**
     * @param array{
     *     Integer?: int|null,
     *     IntegerList?: list<int>|null,
     *     Double?: double|null,
     *     String?: string|null,
     *     StringList?: list<string>|null,
     *     Boolean?: bool|null,
     *     Enum?: string|null,
     *     EnumList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
