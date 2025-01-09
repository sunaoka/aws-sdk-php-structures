<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $namespace
 */
class GetNamespaceRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
