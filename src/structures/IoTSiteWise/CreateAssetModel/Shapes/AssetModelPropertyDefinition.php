<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $externalId
 * @property string $name
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT' $dataType
 * @property string|null $dataTypeSpec
 * @property string|null $unit
 * @property PropertyType $type
 */
class AssetModelPropertyDefinition extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     externalId?: string|null,
     *     name: string,
     *     dataType: 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT',
     *     dataTypeSpec?: string|null,
     *     unit?: string|null,
     *     type: PropertyType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
