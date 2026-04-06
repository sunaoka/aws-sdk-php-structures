<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string|null $versionToken
 * @property Shapes\TableBucketReplicationConfiguration $configuration
 */
class PutTableBucketReplicationRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     versionToken?: string|null,
     *     configuration: Shapes\TableBucketReplicationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
