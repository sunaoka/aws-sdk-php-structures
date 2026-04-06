<?php

namespace Sunaoka\Aws\Structures\mgn\StartImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\S3BucketSource $s3BucketSource
 */
class StartImportRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     s3BucketSource: Shapes\S3BucketSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
