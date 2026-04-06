<?php

namespace Sunaoka\Aws\Structures\S3\RenameObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $RenameSource
 * @property string|null $DestinationIfMatch
 * @property string|null $DestinationIfNoneMatch
 * @property \Aws\Api\DateTimeResult|null $DestinationIfModifiedSince
 * @property \Aws\Api\DateTimeResult|null $DestinationIfUnmodifiedSince
 * @property string|null $SourceIfMatch
 * @property string|null $SourceIfNoneMatch
 * @property \Aws\Api\DateTimeResult|null $SourceIfModifiedSince
 * @property \Aws\Api\DateTimeResult|null $SourceIfUnmodifiedSince
 * @property string|null $ClientToken
 */
class RenameObjectRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     RenameSource: string,
     *     DestinationIfMatch?: string|null,
     *     DestinationIfNoneMatch?: string|null,
     *     DestinationIfModifiedSince?: \Aws\Api\DateTimeResult|null,
     *     DestinationIfUnmodifiedSince?: \Aws\Api\DateTimeResult|null,
     *     SourceIfMatch?: string|null,
     *     SourceIfNoneMatch?: string|null,
     *     SourceIfModifiedSince?: \Aws\Api\DateTimeResult|null,
     *     SourceIfUnmodifiedSince?: \Aws\Api\DateTimeResult|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
