<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjectTagging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string|null $VersionId
 * @property string|null $ExpectedBucketOwner
 */
class DeleteObjectTaggingRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
