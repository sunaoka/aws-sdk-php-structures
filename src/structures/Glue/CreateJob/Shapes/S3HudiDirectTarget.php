<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property string $Path
 * @property 'gzip'|'lzo'|'uncompressed'|'snappy' $Compression
 * @property string|null $NumberTargetPartitions
 * @property list<list<string>>|null $PartitionKeys
 * @property 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta'|'iceberg'|'hyper'|'xml' $Format
 * @property array<string, string> $AdditionalOptions
 * @property DirectSchemaChangePolicy|null $SchemaChangePolicy
 * @property AutoDataQuality|null $AutoDataQuality
 */
class S3HudiDirectTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     Path: string,
     *     Compression: 'gzip'|'lzo'|'uncompressed'|'snappy',
     *     NumberTargetPartitions?: string|null,
     *     PartitionKeys?: list<list<string>>|null,
     *     Format: 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta'|'iceberg'|'hyper'|'xml',
     *     AdditionalOptions: array<string, string>,
     *     SchemaChangePolicy?: DirectSchemaChangePolicy|null,
     *     AutoDataQuality?: AutoDataQuality|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
