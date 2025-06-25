<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string|null $Account
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|'FSX_OPENZFS'|null $StorageClass
 * @property AccessControlTranslation|null $AccessControlTranslation
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 * @property ReplicationTime|null $ReplicationTime
 * @property Metrics|null $Metrics
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     Account?: string|null,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|'FSX_OPENZFS'|null,
     *     AccessControlTranslation?: AccessControlTranslation|null,
     *     EncryptionConfiguration?: EncryptionConfiguration|null,
     *     ReplicationTime?: ReplicationTime|null,
     *     Metrics?: Metrics|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
