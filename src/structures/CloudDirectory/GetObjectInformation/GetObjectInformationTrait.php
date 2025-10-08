<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetObjectInformation;

trait GetObjectInformationTrait
{
    /**
     * @param GetObjectInformationRequest $args
     * @return GetObjectInformationResponse
     */
    public function getObjectInformation(GetObjectInformationRequest $args)
    {
        $result = parent::getObjectInformation($args->toArray());
        return new GetObjectInformationResponse($result->toArray());
    }
}
