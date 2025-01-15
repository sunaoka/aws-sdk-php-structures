<?php

namespace Sunaoka\Aws\Structures\S3Control\GetBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Account
 * @property string $Bucket
 * @property ReplicationTime|null $ReplicationTime
 * @property AccessControlTranslation|null $AccessControlTranslation
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 * @property Metrics|null $Metrics
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|null $StorageClass
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     Account?: string|null,
     *     Bucket: string,
     *     ReplicationTime?: ReplicationTime|null,
     *     AccessControlTranslation?: AccessControlTranslation|null,
     *     EncryptionConfiguration?: EncryptionConfiguration|null,
     *     Metrics?: Metrics|null,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
