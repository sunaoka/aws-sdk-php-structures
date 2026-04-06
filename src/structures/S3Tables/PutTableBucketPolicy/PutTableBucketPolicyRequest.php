<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $resourcePolicy
 */
class PutTableBucketPolicyRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     resourcePolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
