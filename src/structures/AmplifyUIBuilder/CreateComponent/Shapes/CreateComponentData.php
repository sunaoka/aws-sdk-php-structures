<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $sourceId
 * @property string $componentType
 * @property array<string, ComponentProperty> $properties
 * @property list<ComponentChild> $children
 * @property list<ComponentVariant> $variants
 * @property array<string, array<string, string>> $overrides
 * @property array<string, ComponentBindingPropertiesValue> $bindingProperties
 * @property array<string, ComponentDataConfiguration> $collectionProperties
 * @property array<string, string> $tags
 * @property array<string, ComponentEvent> $events
 * @property string $schemaVersion
 */
class CreateComponentData extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     sourceId?: string,
     *     componentType: string,
     *     properties: array<string, ComponentProperty>,
     *     children?: list<ComponentChild>,
     *     variants: list<ComponentVariant>,
     *     overrides: array<string, array<string, string>>,
     *     bindingProperties: array<string, ComponentBindingPropertiesValue>,
     *     collectionProperties?: array<string, ComponentDataConfiguration>,
     *     tags?: array<string, string>,
     *     events?: array<string, ComponentEvent>,
     *     schemaVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
