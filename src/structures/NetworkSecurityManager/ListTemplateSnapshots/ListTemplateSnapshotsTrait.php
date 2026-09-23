<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListTemplateSnapshots;

trait ListTemplateSnapshotsTrait
{
    /**
     * @param ListTemplateSnapshotsRequest $args
     * @return ListTemplateSnapshotsResponse
     */
    public function listTemplateSnapshots(ListTemplateSnapshotsRequest $args)
    {
        $result = parent::listTemplateSnapshots($args->toArray());
        return new ListTemplateSnapshotsResponse($result->toArray());
    }
}
