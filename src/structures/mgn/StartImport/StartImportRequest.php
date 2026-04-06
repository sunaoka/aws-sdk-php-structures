<?php

namespace Sunaoka\Aws\Structures\mgn\StartImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\S3BucketSource $s3BucketSource
 * @property array<string, string>|null $tags
 */
class StartImportRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     s3BucketSource: Shapes\S3BucketSource,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
