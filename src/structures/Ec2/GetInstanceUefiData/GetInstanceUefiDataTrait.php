<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceUefiData;

trait GetInstanceUefiDataTrait
{
    /**
     * @param GetInstanceUefiDataRequest $args
     * @return GetInstanceUefiDataResponse
     */
    public function getInstanceUefiData(GetInstanceUefiDataRequest $args)
    {
        $result = parent::getInstanceUefiData($args->toArray());
        return new GetInstanceUefiDataResponse($result->toArray());
    }
}
