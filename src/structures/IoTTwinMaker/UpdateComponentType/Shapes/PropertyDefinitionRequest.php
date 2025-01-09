<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataType $dataType
 * @property bool $isRequiredInEntity
 * @property bool $isExternalId
 * @property bool $isStoredExternally
 * @property bool $isTimeSeries
 * @property DataValue $defaultValue
 * @property array<string, string> $configuration
 * @property string $displayName
 */
class PropertyDefinitionRequest extends Shape
{
    /**
     * @param array{
     *     dataType?: DataType,
     *     isRequiredInEntity?: bool,
     *     isExternalId?: bool,
     *     isStoredExternally?: bool,
     *     isTimeSeries?: bool,
     *     defaultValue?: DataValue,
     *     configuration?: array<string, string>,
     *     displayName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
