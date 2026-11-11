<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketLogging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property Shapes\TableBucketLoggingStatus $tableBucketLoggingStatus
 */
class PutTableBucketLoggingRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     tableBucketLoggingStatus: Shapes\TableBucketLoggingStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
