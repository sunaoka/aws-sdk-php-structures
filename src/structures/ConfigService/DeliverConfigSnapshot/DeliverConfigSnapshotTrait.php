<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeliverConfigSnapshot;

trait DeliverConfigSnapshotTrait
{
    /**
     * @param DeliverConfigSnapshotRequest $args
     * @return DeliverConfigSnapshotResponse
     */
    public function deliverConfigSnapshot(DeliverConfigSnapshotRequest $args)
    {
        $result = parent::deliverConfigSnapshot($args->toArray());
        return new DeliverConfigSnapshotResponse($result->toArray());
    }
}
