<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutInstanceCommunicationLimits;

trait PutInstanceCommunicationLimitsTrait
{
    /**
     * @param PutInstanceCommunicationLimitsRequest $args
     * @return void
     */
    public function putInstanceCommunicationLimits(PutInstanceCommunicationLimitsRequest $args)
    {
        parent::putInstanceCommunicationLimits($args->toArray());
    }
}
