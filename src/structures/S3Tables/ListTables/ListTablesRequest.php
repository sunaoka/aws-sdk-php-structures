<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $namespace
 * @property string $prefix
 * @property string $continuationToken
 * @property int $maxTables
 */
class ListTablesRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     namespace?: string,
     *     prefix?: string,
     *     continuationToken?: string,
     *     maxTables?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
