<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Account
 * @property string $Bucket
 * @property ReplicationTime $ReplicationTime
 * @property AccessControlTranslation $AccessControlTranslation
 * @property EncryptionConfiguration $EncryptionConfiguration
 * @property Metrics $Metrics
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR' $StorageClass
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     Account?: string,
     *     Bucket: string,
     *     ReplicationTime?: ReplicationTime,
     *     AccessControlTranslation?: AccessControlTranslation,
     *     EncryptionConfiguration?: EncryptionConfiguration,
     *     Metrics?: Metrics,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
