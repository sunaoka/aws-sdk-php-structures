<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModelCompositeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $externalId
 * @property string $name
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT' $dataType
 * @property string $dataTypeSpec
 * @property string $unit
 * @property PropertyType $type
 */
class AssetModelPropertyDefinition extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     externalId?: string,
     *     name: string,
     *     dataType: 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT',
     *     dataTypeSpec?: string,
     *     unit?: string,
     *     type: PropertyType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
