<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetProperty\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $alias
 * @property PropertyNotification $notification
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT' $dataType
 * @property string $unit
 * @property PropertyType $type
 * @property list<AssetPropertyPathSegment> $path
 * @property string $externalId
 */
class Property extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     alias?: string,
     *     notification?: PropertyNotification,
     *     dataType: 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT',
     *     unit?: string,
     *     type?: PropertyType,
     *     path?: list<AssetPropertyPathSegment>,
     *     externalId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
