<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateTemplateSnapshot;

trait CreateTemplateSnapshotTrait
{
    /**
     * @param CreateTemplateSnapshotRequest $args
     * @return CreateTemplateSnapshotResponse
     */
    public function createTemplateSnapshot(CreateTemplateSnapshotRequest $args)
    {
        $result = parent::createTemplateSnapshot($args->toArray());
        return new CreateTemplateSnapshotResponse($result->toArray());
    }
}
