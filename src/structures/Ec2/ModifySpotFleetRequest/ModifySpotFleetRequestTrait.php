<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySpotFleetRequest;

trait ModifySpotFleetRequestTrait
{
    /**
     * @param ModifySpotFleetRequestRequest $args
     * @return ModifySpotFleetRequestResponse
     */
    public function modifySpotFleetRequest(ModifySpotFleetRequestRequest $args)
    {
        $result = parent::modifySpotFleetRequest($args->toArray());
        return new ModifySpotFleetRequestResponse($result->toArray());
    }
}
