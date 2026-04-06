<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateSnapshotCopyConfiguration;

trait UpdateSnapshotCopyConfigurationTrait
{
    /**
     * @param UpdateSnapshotCopyConfigurationRequest $args
     * @return UpdateSnapshotCopyConfigurationResponse
     */
    public function updateSnapshotCopyConfiguration(UpdateSnapshotCopyConfigurationRequest $args)
    {
        $result = parent::updateSnapshotCopyConfiguration($args->toArray());
        return new UpdateSnapshotCopyConfigurationResponse($result->toArray());
    }
}
