<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentArn
 * @property list<ComponentParameter> $parameters
 */
class ComponentConfiguration extends Shape
{
    /**
     * @param array{
     *     componentArn: string,
     *     parameters?: list<ComponentParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
