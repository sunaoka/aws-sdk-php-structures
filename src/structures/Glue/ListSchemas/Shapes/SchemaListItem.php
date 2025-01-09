<?php

namespace Sunaoka\Aws\Structures\Glue\ListSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegistryName
 * @property string $SchemaName
 * @property string $SchemaArn
 * @property string $Description
 * @property 'AVAILABLE'|'PENDING'|'DELETING' $SchemaStatus
 * @property string $CreatedTime
 * @property string $UpdatedTime
 */
class SchemaListItem extends Shape
{
    /**
     * @param array{
     *     RegistryName?: string,
     *     SchemaName?: string,
     *     SchemaArn?: string,
     *     Description?: string,
     *     SchemaStatus?: 'AVAILABLE'|'PENDING'|'DELETING',
     *     CreatedTime?: string,
     *     UpdatedTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
