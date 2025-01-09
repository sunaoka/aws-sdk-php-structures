<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $alias
 * @property PropertyNotification $notification
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT' $dataType
 * @property string $dataTypeSpec
 * @property string $unit
 * @property list<AssetPropertyPathSegment> $path
 * @property string $externalId
 */
class AssetProperty extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     alias?: string,
     *     notification?: PropertyNotification,
     *     dataType: 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT',
     *     dataTypeSpec?: string,
     *     unit?: string,
     *     path?: list<AssetPropertyPathSegment>,
     *     externalId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
