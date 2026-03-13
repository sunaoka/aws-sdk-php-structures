<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|null $ACL
 * @property string $Bucket
 * @property Shapes\CreateBucketConfiguration|null $CreateBucketConfiguration
 * @property string|null $GrantFullControl
 * @property string|null $GrantRead
 * @property string|null $GrantReadACP
 * @property string|null $GrantWrite
 * @property string|null $GrantWriteACP
 * @property bool|null $ObjectLockEnabledForBucket
 * @property 'BucketOwnerPreferred'|'ObjectWriter'|'BucketOwnerEnforced'|null $ObjectOwnership
 * @property 'account-regional'|'global'|null $BucketNamespace
 */
class CreateBucketRequest extends Request
{
    /**
     * @param array{
     *     ACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|null,
     *     Bucket: string,
     *     CreateBucketConfiguration?: Shapes\CreateBucketConfiguration|null,
     *     GrantFullControl?: string|null,
     *     GrantRead?: string|null,
     *     GrantReadACP?: string|null,
     *     GrantWrite?: string|null,
     *     GrantWriteACP?: string|null,
     *     ObjectLockEnabledForBucket?: bool|null,
     *     ObjectOwnership?: 'BucketOwnerPreferred'|'ObjectWriter'|'BucketOwnerEnforced'|null,
     *     BucketNamespace?: 'account-regional'|'global'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
