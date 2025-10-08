<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBSnapshotAttribute;

trait ModifyDBSnapshotAttributeTrait
{
    /**
     * @param ModifyDBSnapshotAttributeRequest $args
     * @return ModifyDBSnapshotAttributeResponse
     */
    public function modifyDBSnapshotAttribute(ModifyDBSnapshotAttributeRequest $args)
    {
        $result = parent::modifyDBSnapshotAttribute($args->toArray());
        return new ModifyDBSnapshotAttributeResponse($result->toArray());
    }
}
