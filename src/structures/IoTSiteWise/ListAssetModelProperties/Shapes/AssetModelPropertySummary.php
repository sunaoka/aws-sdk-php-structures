<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $externalId
 * @property string $name
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT' $dataType
 * @property string|null $dataTypeSpec
 * @property string|null $unit
 * @property PropertyType $type
 * @property string|null $assetModelCompositeModelId
 * @property list<AssetModelPropertyPathSegment>|null $path
 * @property list<InterfaceSummary>|null $interfaceSummaries
 */
class AssetModelPropertySummary extends Shape
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
     *     assetModelCompositeModelId?: string|null,
     *     path?: list<AssetModelPropertyPathSegment>|null,
     *     interfaceSummaries?: list<InterfaceSummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
