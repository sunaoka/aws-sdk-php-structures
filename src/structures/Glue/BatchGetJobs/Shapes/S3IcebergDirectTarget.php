<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property list<list<string>>|null $PartitionKeys
 * @property string $Path
 * @property 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta'|'iceberg'|'hyper'|'xml' $Format
 * @property array<string, string>|null $AdditionalOptions
 * @property DirectSchemaChangePolicy|null $SchemaChangePolicy
 * @property 'gzip'|'lzo'|'uncompressed'|'snappy' $Compression
 * @property string|null $NumberTargetPartitions
 */
class S3IcebergDirectTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     PartitionKeys?: list<list<string>>|null,
     *     Path: string,
     *     Format: 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta'|'iceberg'|'hyper'|'xml',
     *     AdditionalOptions?: array<string, string>|null,
     *     SchemaChangePolicy?: DirectSchemaChangePolicy|null,
     *     Compression: 'gzip'|'lzo'|'uncompressed'|'snappy',
     *     NumberTargetPartitions?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
