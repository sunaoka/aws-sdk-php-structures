<?php

namespace Sunaoka\Aws\Structures\Iot\GetCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property CommandParameterValue $value
 * @property CommandParameterValue $defaultValue
 * @property string $description
 */
class CommandParameter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     value?: CommandParameterValue,
     *     defaultValue?: CommandParameterValue,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
