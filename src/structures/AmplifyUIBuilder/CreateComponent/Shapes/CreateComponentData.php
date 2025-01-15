<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $sourceId
 * @property string $componentType
 * @property array<string, ComponentProperty> $properties
 * @property list<ComponentChild>|null $children
 * @property list<ComponentVariant> $variants
 * @property array<string, array<string, string>> $overrides
 * @property array<string, ComponentBindingPropertiesValue> $bindingProperties
 * @property array<string, ComponentDataConfiguration>|null $collectionProperties
 * @property array<string, string>|null $tags
 * @property array<string, ComponentEvent>|null $events
 * @property string|null $schemaVersion
 */
class CreateComponentData extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     sourceId?: string|null,
     *     componentType: string,
     *     properties: array<string, ComponentProperty>,
     *     children?: list<ComponentChild>|null,
     *     variants: list<ComponentVariant>,
     *     overrides: array<string, array<string, string>>,
     *     bindingProperties: array<string, ComponentBindingPropertiesValue>,
     *     collectionProperties?: array<string, ComponentDataConfiguration>|null,
     *     tags?: array<string, string>|null,
     *     events?: array<string, ComponentEvent>|null,
     *     schemaVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
