<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EligibleForReplication
 * @property \Aws\Api\DateTimeResult $CreatedAfter
 * @property \Aws\Api\DateTimeResult $CreatedBefore
 * @property list<'COMPLETED'|'FAILED'|'REPLICA'|'NONE'> $ObjectReplicationStatuses
 * @property KeyNameConstraint $KeyNameConstraint
 * @property int $ObjectSizeGreaterThanBytes
 * @property int $ObjectSizeLessThanBytes
 * @property list<'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'GLACIER'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'GLACIER_IR'> $MatchAnyStorageClass
 */
class JobManifestGeneratorFilter extends Shape
{
    /**
     * @param array{
     *     EligibleForReplication?: bool,
     *     CreatedAfter?: \Aws\Api\DateTimeResult,
     *     CreatedBefore?: \Aws\Api\DateTimeResult,
     *     ObjectReplicationStatuses?: list<'COMPLETED'|'FAILED'|'REPLICA'|'NONE'>,
     *     KeyNameConstraint?: KeyNameConstraint,
     *     ObjectSizeGreaterThanBytes?: int,
     *     ObjectSizeLessThanBytes?: int,
     *     MatchAnyStorageClass?: list<'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'GLACIER'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'GLACIER_IR'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
