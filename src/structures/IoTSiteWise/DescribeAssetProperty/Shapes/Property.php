<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetProperty\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string|null $externalId
 * @property string $name
 * @property string|null $alias
 * @property PropertyNotification|null $notification
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT' $dataType
 * @property string|null $unit
 * @property PropertyType|null $type
 * @property list<AssetPropertyPathSegment>|null $path
 */
class Property extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     externalId?: string|null,
     *     name: string,
     *     alias?: string|null,
     *     notification?: PropertyNotification|null,
     *     dataType: 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT',
     *     unit?: string|null,
     *     type?: PropertyType|null,
     *     path?: list<AssetPropertyPathSegment>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
