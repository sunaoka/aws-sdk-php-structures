<?php

namespace Sunaoka\Aws\Structures\mgn\StartExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $s3Bucket
 * @property string $s3Key
 * @property string|null $s3BucketOwner
 * @property array<string, string>|null $tags
 */
class StartExportRequest extends Request
{
    /**
     * @param array{
     *     s3Bucket: string,
     *     s3Key: string,
     *     s3BucketOwner?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
