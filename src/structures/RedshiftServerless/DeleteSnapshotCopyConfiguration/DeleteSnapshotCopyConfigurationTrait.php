<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteSnapshotCopyConfiguration;

trait DeleteSnapshotCopyConfigurationTrait
{
    /**
     * @param DeleteSnapshotCopyConfigurationRequest $args
     * @return DeleteSnapshotCopyConfigurationResponse
     */
    public function deleteSnapshotCopyConfiguration(DeleteSnapshotCopyConfigurationRequest $args)
    {
        $result = parent::deleteSnapshotCopyConfiguration($args->toArray());
        return new DeleteSnapshotCopyConfigurationResponse($result->toArray());
    }
}
