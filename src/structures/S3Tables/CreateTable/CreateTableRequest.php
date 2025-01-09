<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $namespace
 * @property string $name
 * @property 'ICEBERG' $format
 */
class CreateTableRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     namespace: string,
     *     name: string,
     *     format: 'ICEBERG'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
