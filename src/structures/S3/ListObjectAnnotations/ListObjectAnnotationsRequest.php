<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectAnnotations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string|null $VersionId
 * @property int<1, 1000>|null $MaxAnnotationResults
 * @property string|null $AnnotationPrefix
 * @property string|null $ContinuationToken
 * @property 'requester'|null $RequestPayer
 * @property string|null $ExpectedBucketOwner
 */
class ListObjectAnnotationsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string|null,
     *     MaxAnnotationResults?: int<1, 1000>|null,
     *     AnnotationPrefix?: string|null,
     *     ContinuationToken?: string|null,
     *     RequestPayer?: 'requester'|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
