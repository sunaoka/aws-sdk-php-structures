<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketArn
 * @property string $eTag
 * @property string $extension
 * @property string $key
 * @property \Aws\Api\DateTimeResult $lastModified
 * @property string $path
 * @property bool $publicAccess
 * @property ServerSideEncryption $serverSideEncryption
 * @property int $size
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'ONEZONE_IA'|'GLACIER'|'GLACIER_IR'|'OUTPOSTS' $storageClass
 * @property list<KeyValuePair> $tags
 * @property string $versionId
 */
class S3Object extends Shape
{
    /**
     * @param array{
     *     bucketArn?: string,
     *     eTag?: string,
     *     extension?: string,
     *     key?: string,
     *     lastModified?: \Aws\Api\DateTimeResult,
     *     path?: string,
     *     publicAccess?: bool,
     *     serverSideEncryption?: ServerSideEncryption,
     *     size?: int,
     *     storageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'ONEZONE_IA'|'GLACIER'|'GLACIER_IR'|'OUTPOSTS',
     *     tags?: list<KeyValuePair>,
     *     versionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
