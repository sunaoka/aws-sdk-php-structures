<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTablePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $namespace
 * @property string $name
 * @property string $resourcePolicy
 */
class PutTablePolicyRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     namespace: string,
     *     name: string,
     *     resourcePolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
