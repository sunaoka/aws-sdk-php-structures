<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListVolumeInitiators;

trait ListVolumeInitiatorsTrait
{
    /**
     * @param ListVolumeInitiatorsRequest $args
     * @return ListVolumeInitiatorsResponse
     */
    public function listVolumeInitiators(ListVolumeInitiatorsRequest $args)
    {
        $result = parent::listVolumeInitiators($args->toArray());
        return new ListVolumeInitiatorsResponse($result->toArray());
    }
}
