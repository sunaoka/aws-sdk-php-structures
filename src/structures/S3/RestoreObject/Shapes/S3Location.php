<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $Prefix
 * @property Encryption|null $Encryption
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control'|null $CannedACL
 * @property list<Grant>|null $AccessControlList
 * @property Tagging|null $Tagging
 * @property list<MetadataEntry>|null $UserMetadata
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|null $StorageClass
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     Prefix: string,
     *     Encryption?: Encryption|null,
     *     CannedACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'aws-exec-read'|'bucket-owner-read'|'bucket-owner-full-control'|null,
     *     AccessControlList?: list<Grant>|null,
     *     Tagging?: Tagging|null,
     *     UserMetadata?: list<MetadataEntry>|null,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
