<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetContainerRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string> $value
 */
class ComponentParameter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     value: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
