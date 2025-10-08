<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\GetInstanceCommunicationLimits;

trait GetInstanceCommunicationLimitsTrait
{
    /**
     * @param GetInstanceCommunicationLimitsRequest $args
     * @return GetInstanceCommunicationLimitsResponse
     */
    public function getInstanceCommunicationLimits(GetInstanceCommunicationLimitsRequest $args)
    {
        $result = parent::getInstanceCommunicationLimits($args->toArray());
        return new GetInstanceCommunicationLimitsResponse($result->toArray());
    }
}
