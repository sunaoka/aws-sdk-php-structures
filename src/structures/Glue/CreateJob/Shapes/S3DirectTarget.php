<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property list<list<string>>|null $PartitionKeys
 * @property string $Path
 * @property string|null $Compression
 * @property string|null $NumberTargetPartitions
 * @property 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta'|'iceberg'|'hyper'|'xml' $Format
 * @property DirectSchemaChangePolicy|null $SchemaChangePolicy
 */
class S3DirectTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     PartitionKeys?: list<list<string>>|null,
     *     Path: string,
     *     Compression?: string|null,
     *     NumberTargetPartitions?: string|null,
     *     Format: 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta'|'iceberg'|'hyper'|'xml',
     *     SchemaChangePolicy?: DirectSchemaChangePolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
