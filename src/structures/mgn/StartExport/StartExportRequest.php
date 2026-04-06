<?php

namespace Sunaoka\Aws\Structures\mgn\StartExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $s3Bucket
 * @property string|null $s3BucketOwner
 * @property string $s3Key
 */
class StartExportRequest extends Request
{
    /**
     * @param array{
     *     s3Bucket: string,
     *     s3BucketOwner?: string|null,
     *     s3Key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
