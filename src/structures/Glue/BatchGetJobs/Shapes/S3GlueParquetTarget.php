<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property list<list<string>>|null $PartitionKeys
 * @property string $Path
 * @property 'snappy'|'lzo'|'gzip'|'brotli'|'lz4'|'uncompressed'|'none'|null $Compression
 * @property string|null $NumberTargetPartitions
 * @property DirectSchemaChangePolicy|null $SchemaChangePolicy
 * @property AutoDataQuality|null $AutoDataQuality
 */
class S3GlueParquetTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     PartitionKeys?: list<list<string>>|null,
     *     Path: string,
     *     Compression?: 'snappy'|'lzo'|'gzip'|'brotli'|'lz4'|'uncompressed'|'none'|null,
     *     NumberTargetPartitions?: string|null,
     *     SchemaChangePolicy?: DirectSchemaChangePolicy|null,
     *     AutoDataQuality?: AutoDataQuality|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
