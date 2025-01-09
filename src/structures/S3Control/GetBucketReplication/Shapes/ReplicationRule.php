<?php

namespace Sunaoka\Aws\Structures\S3Control\GetBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ID
 * @property int $Priority
 * @property string $Prefix
 * @property ReplicationRuleFilter $Filter
 * @property 'Enabled'|'Disabled' $Status
 * @property SourceSelectionCriteria $SourceSelectionCriteria
 * @property ExistingObjectReplication $ExistingObjectReplication
 * @property Destination $Destination
 * @property DeleteMarkerReplication $DeleteMarkerReplication
 * @property string $Bucket
 */
class ReplicationRule extends Shape
{
    /**
     * @param array{
     *     ID?: string,
     *     Priority?: int,
     *     Prefix?: string,
     *     Filter?: ReplicationRuleFilter,
     *     Status: 'Enabled'|'Disabled',
     *     SourceSelectionCriteria?: SourceSelectionCriteria,
     *     ExistingObjectReplication?: ExistingObjectReplication,
     *     Destination: Destination,
     *     DeleteMarkerReplication?: DeleteMarkerReplication,
     *     Bucket: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
