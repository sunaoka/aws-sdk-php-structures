<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property string $Path
 * @property 'gzip'|'lzo'|'uncompressed'|'snappy' $Compression
 * @property list<list<string>>|null $PartitionKeys
 * @property 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta' $Format
 * @property array<string, string> $AdditionalOptions
 * @property DirectSchemaChangePolicy|null $SchemaChangePolicy
 */
class S3HudiDirectTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     Path: string,
     *     Compression: 'gzip'|'lzo'|'uncompressed'|'snappy',
     *     PartitionKeys?: list<list<string>>|null,
     *     Format: 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta',
     *     AdditionalOptions: array<string, string>,
     *     SchemaChangePolicy?: DirectSchemaChangePolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
