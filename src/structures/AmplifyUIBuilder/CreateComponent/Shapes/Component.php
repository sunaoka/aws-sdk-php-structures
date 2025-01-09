<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $sourceId
 * @property string $id
 * @property string $name
 * @property string $componentType
 * @property array<string, ComponentProperty> $properties
 * @property list<ComponentChild> $children
 * @property list<ComponentVariant> $variants
 * @property array<string, array<string, string>> $overrides
 * @property array<string, ComponentBindingPropertiesValue> $bindingProperties
 * @property array<string, ComponentDataConfiguration> $collectionProperties
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property array<string, string> $tags
 * @property array<string, ComponentEvent> $events
 * @property string $schemaVersion
 */
class Component extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     sourceId?: string,
     *     id: string,
     *     name: string,
     *     componentType: string,
     *     properties: array<string, ComponentProperty>,
     *     children?: list<ComponentChild>,
     *     variants: list<ComponentVariant>,
     *     overrides: array<string, array<string, string>>,
     *     bindingProperties: array<string, ComponentBindingPropertiesValue>,
     *     collectionProperties?: array<string, ComponentDataConfiguration>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult,
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
