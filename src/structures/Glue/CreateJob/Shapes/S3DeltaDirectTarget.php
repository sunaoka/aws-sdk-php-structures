<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property list<list<string>> $PartitionKeys
 * @property string $Path
 * @property 'uncompressed'|'snappy' $Compression
 * @property 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta' $Format
 * @property array<string, string> $AdditionalOptions
 * @property DirectSchemaChangePolicy $SchemaChangePolicy
 */
class S3DeltaDirectTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     PartitionKeys?: list<list<string>>,
     *     Path: string,
     *     Compression: 'uncompressed'|'snappy',
     *     Format: 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta',
     *     AdditionalOptions?: array<string, string>,
     *     SchemaChangePolicy?: DirectSchemaChangePolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
