<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ID
 * @property int|null $Priority
 * @property string|null $Prefix
 * @property ReplicationRuleFilter|null $Filter
 * @property 'Enabled'|'Disabled' $Status
 * @property SourceSelectionCriteria|null $SourceSelectionCriteria
 * @property ExistingObjectReplication|null $ExistingObjectReplication
 * @property Destination $Destination
 * @property DeleteMarkerReplication|null $DeleteMarkerReplication
 * @property string $Bucket
 */
class ReplicationRule extends Shape
{
    /**
     * @param array{
     *     ID?: string|null,
     *     Priority?: int|null,
     *     Prefix?: string|null,
     *     Filter?: ReplicationRuleFilter|null,
     *     Status: 'Enabled'|'Disabled',
     *     SourceSelectionCriteria?: SourceSelectionCriteria|null,
     *     ExistingObjectReplication?: ExistingObjectReplication|null,
     *     Destination: Destination,
     *     DeleteMarkerReplication?: DeleteMarkerReplication|null,
     *     Bucket: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
