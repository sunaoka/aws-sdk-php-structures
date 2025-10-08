<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\UpdateDbCluster;

trait UpdateDbClusterTrait
{
    /**
     * @param UpdateDbClusterRequest $args
     * @return UpdateDbClusterResponse
     */
    public function updateDbCluster(UpdateDbClusterRequest $args)
    {
        $result = parent::updateDbCluster($args->toArray());
        return new UpdateDbClusterResponse($result->toArray());
    }
}
