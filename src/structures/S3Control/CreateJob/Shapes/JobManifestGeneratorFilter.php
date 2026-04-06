<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EligibleForReplication
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property list<'COMPLETED'|'FAILED'|'REPLICA'|'NONE'>|null $ObjectReplicationStatuses
 * @property KeyNameConstraint|null $KeyNameConstraint
 * @property int|null $ObjectSizeGreaterThanBytes
 * @property int|null $ObjectSizeLessThanBytes
 * @property list<'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'GLACIER'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'GLACIER_IR'>|null $MatchAnyStorageClass
 * @property list<ObjectEncryptionFilter>|null $MatchAnyObjectEncryption
 */
class JobManifestGeneratorFilter extends Shape
{
    /**
     * @param array{
     *     EligibleForReplication?: bool|null,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     ObjectReplicationStatuses?: list<'COMPLETED'|'FAILED'|'REPLICA'|'NONE'>|null,
     *     KeyNameConstraint?: KeyNameConstraint|null,
     *     ObjectSizeGreaterThanBytes?: int|null,
     *     ObjectSizeLessThanBytes?: int|null,
     *     MatchAnyStorageClass?: list<'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'GLACIER'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'GLACIER_IR'>|null,
     *     MatchAnyObjectEncryption?: list<ObjectEncryptionFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
