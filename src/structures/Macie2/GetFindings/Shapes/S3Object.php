<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucketArn
 * @property string|null $eTag
 * @property string|null $extension
 * @property string|null $key
 * @property \Aws\Api\DateTimeResult|null $lastModified
 * @property string|null $path
 * @property bool|null $publicAccess
 * @property ServerSideEncryption|null $serverSideEncryption
 * @property int|null $size
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'ONEZONE_IA'|'GLACIER'|'GLACIER_IR'|'OUTPOSTS'|null $storageClass
 * @property list<KeyValuePair>|null $tags
 * @property string|null $versionId
 */
class S3Object extends Shape
{
    /**
     * @param array{
     *     bucketArn?: string|null,
     *     eTag?: string|null,
     *     extension?: string|null,
     *     key?: string|null,
     *     lastModified?: \Aws\Api\DateTimeResult|null,
     *     path?: string|null,
     *     publicAccess?: bool|null,
     *     serverSideEncryption?: ServerSideEncryption|null,
     *     size?: int|null,
     *     storageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'ONEZONE_IA'|'GLACIER'|'GLACIER_IR'|'OUTPOSTS'|null,
     *     tags?: list<KeyValuePair>|null,
     *     versionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
