<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $Prefix
 * @property Encryption $Encryption
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control' $CannedACL
 * @property list<Grant> $AccessControlList
 * @property Tagging $Tagging
 * @property list<MetadataEntry> $UserMetadata
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE' $StorageClass
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     Prefix: string,
     *     Encryption?: Encryption,
     *     CannedACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control',
     *     AccessControlList?: list<Grant>,
     *     Tagging?: Tagging,
     *     UserMetadata?: list<MetadataEntry>,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
