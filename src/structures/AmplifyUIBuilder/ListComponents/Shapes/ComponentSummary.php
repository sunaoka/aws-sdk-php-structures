<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ListComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $id
 * @property string $name
 * @property string $componentType
 */
class ComponentSummary extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     id: string,
     *     name: string,
     *     componentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
