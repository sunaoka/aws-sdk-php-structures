<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteTableBucketReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string|null $versionToken
 */
class DeleteTableBucketReplicationRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     versionToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
