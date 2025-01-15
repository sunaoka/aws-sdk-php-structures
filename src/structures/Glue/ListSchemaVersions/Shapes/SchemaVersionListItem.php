<?php

namespace Sunaoka\Aws\Structures\Glue\ListSchemaVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SchemaArn
 * @property string|null $SchemaVersionId
 * @property int<1, 100000>|null $VersionNumber
 * @property 'AVAILABLE'|'PENDING'|'FAILURE'|'DELETING'|null $Status
 * @property string|null $CreatedTime
 */
class SchemaVersionListItem extends Shape
{
    /**
     * @param array{
     *     SchemaArn?: string|null,
     *     SchemaVersionId?: string|null,
     *     VersionNumber?: int<1, 100000>|null,
     *     Status?: 'AVAILABLE'|'PENDING'|'FAILURE'|'DELETING'|null,
     *     CreatedTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
