<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataType|null $dataType
 * @property bool|null $isRequiredInEntity
 * @property bool|null $isExternalId
 * @property bool|null $isStoredExternally
 * @property bool|null $isTimeSeries
 * @property DataValue|null $defaultValue
 * @property array<string, string>|null $configuration
 * @property string|null $displayName
 */
class PropertyDefinitionRequest extends Shape
{
    /**
     * @param array{
     *     dataType?: DataType|null,
     *     isRequiredInEntity?: bool|null,
     *     isExternalId?: bool|null,
     *     isStoredExternally?: bool|null,
     *     isTimeSeries?: bool|null,
     *     defaultValue?: DataValue|null,
     *     configuration?: array<string, string>|null,
     *     displayName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
