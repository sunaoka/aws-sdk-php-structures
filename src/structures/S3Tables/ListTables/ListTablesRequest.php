<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string|null $namespace
 * @property string|null $prefix
 * @property string|null $continuationToken
 * @property int<1, 1000>|null $maxTables
 */
class ListTablesRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     namespace?: string|null,
     *     prefix?: string|null,
     *     continuationToken?: string|null,
     *     maxTables?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
