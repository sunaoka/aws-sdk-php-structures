<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListSnapshotCopyConfigurations;

trait ListSnapshotCopyConfigurationsTrait
{
    /**
     * @param ListSnapshotCopyConfigurationsRequest $args
     * @return ListSnapshotCopyConfigurationsResponse
     */
    public function listSnapshotCopyConfigurations(ListSnapshotCopyConfigurationsRequest $args)
    {
        $result = parent::listSnapshotCopyConfigurations($args->toArray());
        return new ListSnapshotCopyConfigurationsResponse($result->toArray());
    }
}
