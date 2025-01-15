<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $sourceId
 * @property string|null $componentType
 * @property array<string, ComponentProperty>|null $properties
 * @property list<ComponentChild>|null $children
 * @property list<ComponentVariant>|null $variants
 * @property array<string, array<string, string>>|null $overrides
 * @property array<string, ComponentBindingPropertiesValue>|null $bindingProperties
 * @property array<string, ComponentDataConfiguration>|null $collectionProperties
 * @property array<string, ComponentEvent>|null $events
 * @property string|null $schemaVersion
 */
class UpdateComponentData extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     sourceId?: string|null,
     *     componentType?: string|null,
     *     properties?: array<string, ComponentProperty>|null,
     *     children?: list<ComponentChild>|null,
     *     variants?: list<ComponentVariant>|null,
     *     overrides?: array<string, array<string, string>>|null,
     *     bindingProperties?: array<string, ComponentBindingPropertiesValue>|null,
     *     collectionProperties?: array<string, ComponentDataConfiguration>|null,
     *     events?: array<string, ComponentEvent>|null,
     *     schemaVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
