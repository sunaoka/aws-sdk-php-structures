<?php

namespace Sunaoka\Aws\Structures\Deadline\ListVolumes;

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
