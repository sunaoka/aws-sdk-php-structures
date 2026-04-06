<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 */
class GetTableBucketPolicyRequest extends Request
{
    /**
     * @param array{tableBucketARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
