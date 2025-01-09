<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRUE'|'FALSE'|'UNKNOWN' $allowsUnencryptedObjectUploads
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ServerSideEncryption $defaultServerSideEncryption
 * @property string $name
 * @property S3BucketOwner $owner
 * @property BucketPublicAccess $publicAccess
 * @property list<KeyValuePair> $tags
 */
class S3Bucket extends Shape
{
    /**
     * @param array{
     *     allowsUnencryptedObjectUploads?: 'TRUE'|'FALSE'|'UNKNOWN',
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     defaultServerSideEncryption?: ServerSideEncryption,
     *     name?: string,
     *     owner?: S3BucketOwner,
     *     publicAccess?: BucketPublicAccess,
     *     tags?: list<KeyValuePair>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
