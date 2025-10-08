<?php

namespace Sunaoka\Aws\Structures\Account\GetContactInformation;

trait GetContactInformationTrait
{
    /**
     * @param GetContactInformationRequest $args
     * @return GetContactInformationResponse
     */
    public function getContactInformation(GetContactInformationRequest $args)
    {
        $result = parent::getContactInformation($args->toArray());
        return new GetContactInformationResponse($result->toArray());
    }
}
