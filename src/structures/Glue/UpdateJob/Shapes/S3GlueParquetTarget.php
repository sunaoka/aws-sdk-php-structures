<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property list<list<string>> $PartitionKeys
 * @property string $Path
 * @property 'snappy'|'lzo'|'gzip'|'uncompressed'|'none' $Compression
 * @property DirectSchemaChangePolicy $SchemaChangePolicy
 */
class S3GlueParquetTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     PartitionKeys?: list<list<string>>,
     *     Path: string,
     *     Compression?: 'snappy'|'lzo'|'gzip'|'uncompressed'|'none',
     *     SchemaChangePolicy?: DirectSchemaChangePolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
