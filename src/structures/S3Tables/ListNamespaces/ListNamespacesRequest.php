<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListNamespaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $prefix
 * @property string $continuationToken
 * @property int $maxNamespaces
 */
class ListNamespacesRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     prefix?: string,
     *     continuationToken?: string,
     *     maxNamespaces?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
