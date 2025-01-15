<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentType
 * @property string $name
 * @property array<string, ComponentProperty> $properties
 * @property list<ComponentChild>|null $children
 * @property array<string, ComponentEvent>|null $events
 * @property string|null $sourceId
 */
class ComponentChild extends Shape
{
    /**
     * @param array{
     *     componentType: string,
     *     name: string,
     *     properties: array<string, ComponentProperty>,
     *     children?: list<ComponentChild>|null,
     *     events?: array<string, ComponentEvent>|null,
     *     sourceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
