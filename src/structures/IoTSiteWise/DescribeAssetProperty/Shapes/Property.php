<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetProperty\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string|null $alias
 * @property PropertyNotification|null $notification
 * @property 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT' $dataType
 * @property string|null $unit
 * @property PropertyType|null $type
 */
class Property extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     alias?: string|null,
     *     notification?: PropertyNotification|null,
     *     dataType: 'STRING'|'INTEGER'|'DOUBLE'|'BOOLEAN'|'STRUCT',
     *     unit?: string|null,
     *     type?: PropertyType|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
