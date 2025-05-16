<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property list<list<string>>|null $PartitionKeys
 * @property string $Path
 * @property 'uncompressed'|'snappy' $Compression
 * @property string|null $NumberTargetPartitions
 * @property 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta'|'iceberg'|'hyper'|'xml' $Format
 * @property array<string, string>|null $AdditionalOptions
 * @property DirectSchemaChangePolicy|null $SchemaChangePolicy
 */
class S3DeltaDirectTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     PartitionKeys?: list<list<string>>|null,
     *     Path: string,
     *     Compression: 'uncompressed'|'snappy',
     *     NumberTargetPartitions?: string|null,
     *     Format: 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta'|'iceberg'|'hyper'|'xml',
     *     AdditionalOptions?: array<string, string>|null,
     *     SchemaChangePolicy?: DirectSchemaChangePolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
