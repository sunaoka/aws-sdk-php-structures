<?php

namespace Sunaoka\Aws\Structures\Glue\ListSchemaVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SchemaArn
 * @property string $SchemaVersionId
 * @property int<1, 100000> $VersionNumber
 * @property 'AVAILABLE'|'PENDING'|'FAILURE'|'DELETING' $Status
 * @property string $CreatedTime
 */
class SchemaVersionListItem extends Shape
{
    /**
     * @param array{
     *     SchemaArn?: string,
     *     SchemaVersionId?: string,
     *     VersionNumber?: int<1, 100000>,
     *     Status?: 'AVAILABLE'|'PENDING'|'FAILURE'|'DELETING',
     *     CreatedTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
