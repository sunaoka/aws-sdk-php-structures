<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyDBClusterSnapshotAttribute;

trait ModifyDBClusterSnapshotAttributeTrait
{
    /**
     * @param ModifyDBClusterSnapshotAttributeRequest $args
     * @return ModifyDBClusterSnapshotAttributeResponse
     */
    public function modifyDBClusterSnapshotAttribute(ModifyDBClusterSnapshotAttributeRequest $args)
    {
        $result = parent::modifyDBClusterSnapshotAttribute($args->toArray());
        return new ModifyDBClusterSnapshotAttributeResponse($result->toArray());
    }
}
