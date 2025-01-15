<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $type
 * @property list<string>|null $defaultValue
 * @property string|null $description
 */
class ComponentParameterDetail extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: string,
     *     defaultValue?: list<string>|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
