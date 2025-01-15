<?php

namespace Sunaoka\Aws\Structures\Glue\ListSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegistryName
 * @property string|null $SchemaName
 * @property string|null $SchemaArn
 * @property string|null $Description
 * @property 'AVAILABLE'|'PENDING'|'DELETING'|null $SchemaStatus
 * @property string|null $CreatedTime
 * @property string|null $UpdatedTime
 */
class SchemaListItem extends Shape
{
    /**
     * @param array{
     *     RegistryName?: string|null,
     *     SchemaName?: string|null,
     *     SchemaArn?: string|null,
     *     Description?: string|null,
     *     SchemaStatus?: 'AVAILABLE'|'PENDING'|'DELETING'|null,
     *     CreatedTime?: string|null,
     *     UpdatedTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
