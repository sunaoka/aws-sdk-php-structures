<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxVolumes;

trait ListKxVolumesTrait
{
    /**
     * @param ListKxVolumesRequest $args
     * @return ListKxVolumesResponse
     */
    public function listKxVolumes(ListKxVolumesRequest $args)
    {
        $result = parent::listKxVolumes($args->toArray());
        return new ListKxVolumesResponse($result->toArray());
    }
}
