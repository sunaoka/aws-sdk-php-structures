<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $Prefix
 * @property Encryption $Encryption
 * @property 'private'|'public-read'|'public-read-write'|'aws-exec-read'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control' $CannedACL
 * @property list<Grant> $AccessControlList
 * @property array<string, string> $Tagging
 * @property array<string, string> $UserMetadata
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA' $StorageClass
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     BucketName?: string,
     *     Prefix?: string,
     *     Encryption?: Encryption,
     *     CannedACL?: 'private'|'public-read'|'public-read-write'|'aws-exec-read'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control',
     *     AccessControlList?: list<Grant>,
     *     Tagging?: array<string, string>,
     *     UserMetadata?: array<string, string>,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
