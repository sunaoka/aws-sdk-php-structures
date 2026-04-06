<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModelCompositeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $externalId
 * @property string $name
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT' $dataType
 * @property string|null $dataTypeSpec
 * @property string|null $unit
 * @property PropertyType $type
 * @property list<AssetModelPropertyPathSegment>|null $path
 */
class AssetModelProperty extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     externalId?: string|null,
     *     name: string,
     *     dataType: 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT',
     *     dataTypeSpec?: string|null,
     *     unit?: string|null,
     *     type: PropertyType,
     *     path?: list<AssetModelPropertyPathSegment>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
