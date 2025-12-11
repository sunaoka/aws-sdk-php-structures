<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableReplicationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'completed'|'failed' $replicationStatus
 * @property string $destinationTableBucketArn
 * @property string|null $destinationTableArn
 * @property LastSuccessfulReplicatedUpdate|null $lastSuccessfulReplicatedUpdate
 * @property string|null $failureMessage
 */
class ReplicationDestinationStatusModel extends Shape
{
    /**
     * @param array{
     *     replicationStatus: 'pending'|'completed'|'failed',
     *     destinationTableBucketArn: string,
     *     destinationTableArn?: string|null,
     *     lastSuccessfulReplicatedUpdate?: LastSuccessfulReplicatedUpdate|null,
     *     failureMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
