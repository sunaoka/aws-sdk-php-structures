<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string|null $sourceId
 * @property string $id
 * @property string $name
 * @property string $componentType
 * @property array<string, ComponentProperty> $properties
 * @property list<ComponentChild>|null $children
 * @property list<ComponentVariant> $variants
 * @property array<string, array<string, string>> $overrides
 * @property array<string, ComponentBindingPropertiesValue> $bindingProperties
 * @property array<string, ComponentDataConfiguration>|null $collectionProperties
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property array<string, string>|null $tags
 * @property array<string, ComponentEvent>|null $events
 * @property string|null $schemaVersion
 */
class Component extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     sourceId?: string|null,
     *     id: string,
     *     name: string,
     *     componentType: string,
     *     properties: array<string, ComponentProperty>,
     *     children?: list<ComponentChild>|null,
     *     variants: list<ComponentVariant>,
     *     overrides: array<string, array<string, string>>,
     *     bindingProperties: array<string, ComponentBindingPropertiesValue>,
     *     collectionProperties?: array<string, ComponentDataConfiguration>|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
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
