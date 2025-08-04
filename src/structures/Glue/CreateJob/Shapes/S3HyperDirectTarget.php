<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta'|'iceberg'|'hyper'|'xml'|null $Format
 * @property list<list<string>>|null $PartitionKeys
 * @property string $Path
 * @property 'uncompressed'|null $Compression
 * @property DirectSchemaChangePolicy|null $SchemaChangePolicy
 * @property AutoDataQuality|null $AutoDataQuality
 * @property list<GlueSchema>|null $OutputSchemas
 */
class S3HyperDirectTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     Format?: 'json'|'csv'|'avro'|'orc'|'parquet'|'hudi'|'delta'|'iceberg'|'hyper'|'xml'|null,
     *     PartitionKeys?: list<list<string>>|null,
     *     Path: string,
     *     Compression?: 'uncompressed'|null,
     *     SchemaChangePolicy?: DirectSchemaChangePolicy|null,
     *     AutoDataQuality?: AutoDataQuality|null,
     *     OutputSchemas?: list<GlueSchema>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
