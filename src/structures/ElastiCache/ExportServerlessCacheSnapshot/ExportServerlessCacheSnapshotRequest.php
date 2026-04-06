<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ExportServerlessCacheSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerlessCacheSnapshotName
 * @property string $S3BucketName
 */
class ExportServerlessCacheSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ServerlessCacheSnapshotName: string,
     *     S3BucketName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
