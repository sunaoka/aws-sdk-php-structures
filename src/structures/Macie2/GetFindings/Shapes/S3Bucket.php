<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRUE'|'FALSE'|'UNKNOWN'|null $allowsUnencryptedObjectUploads
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ServerSideEncryption|null $defaultServerSideEncryption
 * @property string|null $name
 * @property S3BucketOwner|null $owner
 * @property BucketPublicAccess|null $publicAccess
 * @property list<KeyValuePair>|null $tags
 */
class S3Bucket extends Shape
{
    /**
     * @param array{
     *     allowsUnencryptedObjectUploads?: 'TRUE'|'FALSE'|'UNKNOWN'|null,
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     defaultServerSideEncryption?: ServerSideEncryption|null,
     *     name?: string|null,
     *     owner?: S3BucketOwner|null,
     *     publicAccess?: BucketPublicAccess|null,
     *     tags?: list<KeyValuePair>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
