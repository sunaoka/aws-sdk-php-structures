<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListSnapshotOperations;

trait ListSnapshotOperationsTrait
{
    /**
     * @param ListSnapshotOperationsRequest $args
     * @return ListSnapshotOperationsResponse
     */
    public function listSnapshotOperations(ListSnapshotOperationsRequest $args)
    {
        $result = parent::listSnapshotOperations($args->toArray());
        return new ListSnapshotOperationsResponse($result->toArray());
    }
}
