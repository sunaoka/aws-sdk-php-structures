<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $namespace
 */
class DeleteNamespaceRequest extends Request
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
