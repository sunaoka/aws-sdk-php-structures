<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string|null $alias
 * @property PropertyNotification|null $notification
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT' $dataType
 * @property string|null $dataTypeSpec
 * @property string|null $unit
 * @property list<AssetPropertyPathSegment>|null $path
 * @property string|null $externalId
 */
class AssetProperty extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     alias?: string|null,
     *     notification?: PropertyNotification|null,
     *     dataType: 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT',
     *     dataTypeSpec?: string|null,
     *     unit?: string|null,
     *     path?: list<AssetPropertyPathSegment>|null,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
