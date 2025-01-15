<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListNamespaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string|null $prefix
 * @property string|null $continuationToken
 * @property int<1, 1000>|null $maxNamespaces
 */
class ListNamespacesRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     prefix?: string|null,
     *     continuationToken?: string|null,
     *     maxNamespaces?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
