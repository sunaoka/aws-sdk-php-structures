<?php

namespace Sunaoka\Aws\Structures\KinesisVideoSignalingChannels\SendAlexaOfferToMaster;

trait SendAlexaOfferToMasterTrait
{
    /**
     * @param SendAlexaOfferToMasterRequest $args
     * @return SendAlexaOfferToMasterResponse
     */
    public function sendAlexaOfferToMaster(SendAlexaOfferToMasterRequest $args)
    {
        $result = parent::sendAlexaOfferToMaster($args->toArray());
        return new SendAlexaOfferToMasterResponse($result->toArray());
    }
}
