<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValueHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentName
 * @property string $componentPath
 * @property array<string, string> $externalIdProperty
 * @property string $entityId
 * @property string $propertyName
 */
class EntityPropertyReference extends Shape
{
    /**
     * @param array{
     *     componentName?: string,
     *     componentPath?: string,
     *     externalIdProperty?: array<string, string>,
     *     entityId?: string,
     *     propertyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
