<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConfigurationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Integer
 * @property list<int> $IntegerList
 * @property double $Double
 * @property string $String
 * @property list<string> $StringList
 * @property bool $Boolean
 * @property string $Enum
 * @property list<string> $EnumList
 */
class ParameterValue extends Shape
{
    /**
     * @param array{
     *     Integer?: int,
     *     IntegerList?: list<int>,
     *     Double?: double,
     *     String?: string,
     *     StringList?: list<string>,
     *     Boolean?: bool,
     *     Enum?: string,
     *     EnumList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
