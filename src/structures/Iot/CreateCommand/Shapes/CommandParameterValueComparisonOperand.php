<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $number
 * @property list<string>|null $numbers
 * @property string|null $string
 * @property list<string>|null $strings
 * @property CommandParameterValueNumberRange|null $numberRange
 */
class CommandParameterValueComparisonOperand extends Shape
{
    /**
     * @param array{
     *     number?: string|null,
     *     numbers?: list<string>|null,
     *     string?: string|null,
     *     strings?: list<string>|null,
     *     numberRange?: CommandParameterValueNumberRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
