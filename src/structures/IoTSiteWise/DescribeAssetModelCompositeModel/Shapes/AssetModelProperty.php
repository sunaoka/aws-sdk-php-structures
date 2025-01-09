<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModelCompositeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $externalId
 * @property string $name
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT' $dataType
 * @property string $dataTypeSpec
 * @property string $unit
 * @property PropertyType $type
 * @property list<AssetModelPropertyPathSegment> $path
 */
class AssetModelProperty extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     externalId?: string,
     *     name: string,
     *     dataType: 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT',
     *     dataTypeSpec?: string,
     *     unit?: string,
     *     type: PropertyType,
     *     path?: list<AssetModelPropertyPathSegment>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
