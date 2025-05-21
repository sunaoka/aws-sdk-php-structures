<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property list<list<string>>|null $PartitionKeys
 * @property string $Path
 * @property 'uncompressed'|null $Compression
 * @property DirectSchemaChangePolicy|null $SchemaChangePolicy
 */
class S3HyperDirectTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     PartitionKeys?: list<list<string>>|null,
     *     Path: string,
     *     Compression?: 'uncompressed'|null,
     *     SchemaChangePolicy?: DirectSchemaChangePolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
