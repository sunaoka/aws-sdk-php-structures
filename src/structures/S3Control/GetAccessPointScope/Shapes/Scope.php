<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPointScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Prefixes
 * @property list<'GetObject'|'GetObjectAttributes'|'ListMultipartUploadParts'|'ListBucket'|'ListBucketMultipartUploads'|'PutObject'|'DeleteObject'|'AbortMultipartUpload'>|null $Permissions
 */
class Scope extends Shape
{
    /**
     * @param array{
     *     Prefixes?: list<string>|null,
     *     Permissions?: list<'GetObject'|'GetObjectAttributes'|'ListMultipartUploadParts'|'ListBucket'|'ListBucketMultipartUploads'|'PutObject'|'DeleteObject'|'AbortMultipartUpload'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
