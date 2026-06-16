<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjectAnnotation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $AnnotationName
 * @property string|null $VersionId
 * @property 'requester'|null $RequestPayer
 * @property string|null $ExpectedBucketOwner
 * @property string|null $ObjectIfMatch
 */
class DeleteObjectAnnotationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     AnnotationName: string,
     *     VersionId?: string|null,
     *     RequestPayer?: 'requester'|null,
     *     ExpectedBucketOwner?: string|null,
     *     ObjectIfMatch?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
