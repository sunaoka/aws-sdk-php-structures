<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteTableBucketEncryption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 */
class DeleteTableBucketEncryptionRequest extends Request
{
    /**
     * @param array{tableBucketARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
