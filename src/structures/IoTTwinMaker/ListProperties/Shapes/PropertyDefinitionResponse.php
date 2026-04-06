<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataType $dataType
 * @property bool $isTimeSeries
 * @property bool $isRequiredInEntity
 * @property bool $isExternalId
 * @property bool $isStoredExternally
 * @property bool $isImported
 * @property bool $isFinal
 * @property bool $isInherited
 * @property DataValue|null $defaultValue
 * @property array<string, string>|null $configuration
 * @property string|null $displayName
 */
class PropertyDefinitionResponse extends Shape
{
    /**
     * @param array{
     *     dataType: DataType,
     *     isTimeSeries: bool,
     *     isRequiredInEntity: bool,
     *     isExternalId: bool,
     *     isStoredExternally: bool,
     *     isImported: bool,
     *     isFinal: bool,
     *     isInherited: bool,
     *     defaultValue?: DataValue|null,
     *     configuration?: array<string, string>|null,
     *     displayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
