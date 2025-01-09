<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $namespace
 * @property string $prefix
 * @property string $continuationToken
 * @property int<1, 1000> $maxTables
 */
class ListTablesRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     namespace?: string,
     *     prefix?: string,
     *     continuationToken?: string,
     *     maxTables?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
