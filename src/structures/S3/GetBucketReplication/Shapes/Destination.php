<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Account
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE' $StorageClass
 * @property AccessControlTranslation $AccessControlTranslation
 * @property EncryptionConfiguration $EncryptionConfiguration
 * @property ReplicationTime $ReplicationTime
 * @property Metrics $Metrics
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     Account?: string,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE',
     *     AccessControlTranslation?: AccessControlTranslation,
     *     EncryptionConfiguration?: EncryptionConfiguration,
     *     ReplicationTime?: ReplicationTime,
     *     Metrics?: Metrics
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
