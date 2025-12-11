<?php

namespace Sunaoka\Aws\Structures\Ec2\ListVolumesInRecycleBin;

trait ListVolumesInRecycleBinTrait
{
    /**
     * @param ListVolumesInRecycleBinRequest $args
     * @return ListVolumesInRecycleBinResponse
     */
    public function listVolumesInRecycleBin(ListVolumesInRecycleBinRequest $args)
    {
        $result = parent::listVolumesInRecycleBin($args->toArray());
        return new ListVolumesInRecycleBinResponse($result->toArray());
    }
}
