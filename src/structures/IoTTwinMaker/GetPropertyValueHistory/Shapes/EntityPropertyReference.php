<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValueHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $componentName
 * @property string|null $componentPath
 * @property array<string, string>|null $externalIdProperty
 * @property string|null $entityId
 * @property string $propertyName
 */
class EntityPropertyReference extends Shape
{
    /**
     * @param array{
     *     componentName?: string|null,
     *     componentPath?: string|null,
     *     externalIdProperty?: array<string, string>|null,
     *     entityId?: string|null,
     *     propertyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
