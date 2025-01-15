<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImageRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentArn
 * @property list<ComponentParameter>|null $parameters
 */
class ComponentConfiguration extends Shape
{
    /**
     * @param array{
     *     componentArn: string,
     *     parameters?: list<ComponentParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
