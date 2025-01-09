<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $MFA
 * @property string $VersionId
 * @property 'requester' $RequestPayer
 * @property bool $BypassGovernanceRetention
 * @property string $ExpectedBucketOwner
 * @property string $IfMatch
 * @property \Aws\Api\DateTimeResult $IfMatchLastModifiedTime
 * @property int $IfMatchSize
 */
class DeleteObjectRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     MFA?: string,
     *     VersionId?: string,
     *     RequestPayer?: 'requester',
     *     BypassGovernanceRetention?: bool,
     *     ExpectedBucketOwner?: string,
     *     IfMatch?: string,
     *     IfMatchLastModifiedTime?: \Aws\Api\DateTimeResult,
     *     IfMatchSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
