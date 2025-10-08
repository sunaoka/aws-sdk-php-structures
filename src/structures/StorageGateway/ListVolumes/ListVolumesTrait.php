<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListVolumes;

trait ListVolumesTrait
{
    /**
     * @param ListVolumesRequest $args
     * @return ListVolumesResponse
     */
    public function listVolumes(ListVolumesRequest $args)
    {
        $result = parent::listVolumes($args->toArray());
        return new ListVolumesResponse($result->toArray());
    }
}
