<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string|null $MFA
 * @property string|null $VersionId
 * @property 'requester'|null $RequestPayer
 * @property bool|null $BypassGovernanceRetention
 * @property string|null $ExpectedBucketOwner
 * @property string|null $IfMatch
 * @property \Aws\Api\DateTimeResult|null $IfMatchLastModifiedTime
 * @property int|null $IfMatchSize
 */
class DeleteObjectRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     MFA?: string|null,
     *     VersionId?: string|null,
     *     RequestPayer?: 'requester'|null,
     *     BypassGovernanceRetention?: bool|null,
     *     ExpectedBucketOwner?: string|null,
     *     IfMatch?: string|null,
     *     IfMatchLastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     IfMatchSize?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
