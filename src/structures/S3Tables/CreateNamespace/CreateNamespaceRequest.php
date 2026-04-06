<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property list<string> $namespace
 */
class CreateNamespaceRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     namespace: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
