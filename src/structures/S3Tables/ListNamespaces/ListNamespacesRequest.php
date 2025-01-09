<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListNamespaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $prefix
 * @property string $continuationToken
 * @property int<1, 1000> $maxNamespaces
 */
class ListNamespacesRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     prefix?: string,
     *     continuationToken?: string,
     *     maxNamespaces?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
