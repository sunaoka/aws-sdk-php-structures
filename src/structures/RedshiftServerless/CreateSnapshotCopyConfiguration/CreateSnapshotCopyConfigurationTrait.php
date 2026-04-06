<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateSnapshotCopyConfiguration;

trait CreateSnapshotCopyConfigurationTrait
{
    /**
     * @param CreateSnapshotCopyConfigurationRequest $args
     * @return CreateSnapshotCopyConfigurationResponse
     */
    public function createSnapshotCopyConfiguration(CreateSnapshotCopyConfigurationRequest $args)
    {
        $result = parent::createSnapshotCopyConfiguration($args->toArray());
        return new CreateSnapshotCopyConfigurationResponse($result->toArray());
    }
}
