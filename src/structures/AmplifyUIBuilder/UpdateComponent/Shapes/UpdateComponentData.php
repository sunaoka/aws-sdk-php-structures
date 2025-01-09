<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $sourceId
 * @property string $componentType
 * @property array<string, ComponentProperty> $properties
 * @property list<ComponentChild> $children
 * @property list<ComponentVariant> $variants
 * @property array<string, array<string, string>> $overrides
 * @property array<string, ComponentBindingPropertiesValue> $bindingProperties
 * @property array<string, ComponentDataConfiguration> $collectionProperties
 * @property array<string, ComponentEvent> $events
 * @property string $schemaVersion
 */
class UpdateComponentData extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     sourceId?: string,
     *     componentType?: string,
     *     properties?: array<string, ComponentProperty>,
     *     children?: list<ComponentChild>,
     *     variants?: list<ComponentVariant>,
     *     overrides?: array<string, array<string, string>>,
     *     bindingProperties?: array<string, ComponentBindingPropertiesValue>,
     *     collectionProperties?: array<string, ComponentDataConfiguration>,
     *     events?: array<string, ComponentEvent>,
     *     schemaVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
