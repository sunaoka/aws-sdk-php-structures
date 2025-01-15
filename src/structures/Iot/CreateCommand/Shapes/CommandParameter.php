<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property CommandParameterValue|null $value
 * @property CommandParameterValue|null $defaultValue
 * @property string|null $description
 */
class CommandParameter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     value?: CommandParameterValue|null,
     *     defaultValue?: CommandParameterValue|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
