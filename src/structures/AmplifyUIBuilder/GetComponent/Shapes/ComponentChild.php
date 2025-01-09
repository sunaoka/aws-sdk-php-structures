<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentType
 * @property string $name
 * @property array<string, ComponentProperty> $properties
 * @property list<ComponentChild> $children
 * @property array<string, ComponentEvent> $events
 * @property string $sourceId
 */
class ComponentChild extends Shape
{
    /**
     * @param array{
     *     componentType: string,
     *     name: string,
     *     properties: array<string, ComponentProperty>,
     *     children?: list<ComponentChild>,
     *     events?: array<string, ComponentEvent>,
     *     sourceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
