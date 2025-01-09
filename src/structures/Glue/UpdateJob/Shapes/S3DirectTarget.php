<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property list<list<string>> $PartitionKeys
 * @property string $Path
 * @property string $Compression
 * @property 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta' $Format
 * @property DirectSchemaChangePolicy $SchemaChangePolicy
 */
class S3DirectTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     PartitionKeys?: list<list<string>>,
     *     Path: string,
     *     Compression?: string,
     *     Format: 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta',
     *     SchemaChangePolicy?: DirectSchemaChangePolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
