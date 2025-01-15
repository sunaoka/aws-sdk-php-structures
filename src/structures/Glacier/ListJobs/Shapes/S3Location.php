<?php

namespace Sunaoka\Aws\Structures\Glacier\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketName
 * @property string|null $Prefix
 * @property Encryption|null $Encryption
 * @property 'private'|'public-read'|'public-read-write'|'aws-exec-read'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|null $CannedACL
 * @property list<Grant>|null $AccessControlList
 * @property array<string, string>|null $Tagging
 * @property array<string, string>|null $UserMetadata
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|null $StorageClass
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     BucketName?: string|null,
     *     Prefix?: string|null,
     *     Encryption?: Encryption|null,
     *     CannedACL?: 'private'|'public-read'|'public-read-write'|'aws-exec-read'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|null,
     *     AccessControlList?: list<Grant>|null,
     *     Tagging?: array<string, string>|null,
     *     UserMetadata?: array<string, string>|null,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
