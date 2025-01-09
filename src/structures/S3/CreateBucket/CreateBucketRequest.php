<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read' $ACL
 * @property string $Bucket
 * @property Shapes\CreateBucketConfiguration $CreateBucketConfiguration
 * @property string $GrantFullControl
 * @property string $GrantRead
 * @property string $GrantReadACP
 * @property string $GrantWrite
 * @property string $GrantWriteACP
 * @property bool $ObjectLockEnabledForBucket
 * @property 'BucketOwnerPreferred'|'ObjectWriter'|'BucketOwnerEnforced' $ObjectOwnership
 */
class CreateBucketRequest extends Request
{
    /**
     * @param array{
     *     ACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read',
     *     Bucket: string,
     *     CreateBucketConfiguration?: Shapes\CreateBucketConfiguration,
     *     GrantFullControl?: string,
     *     GrantRead?: string,
     *     GrantReadACP?: string,
     *     GrantWrite?: string,
     *     GrantWriteACP?: string,
     *     ObjectLockEnabledForBucket?: bool,
     *     ObjectOwnership?: 'BucketOwnerPreferred'|'ObjectWriter'|'BucketOwnerEnforced'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
