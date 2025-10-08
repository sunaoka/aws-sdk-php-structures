<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetSignedBluinsightsUrl;

trait GetSignedBluinsightsUrlTrait
{
    /**
     * @return GetSignedBluinsightsUrlResponse
     */
    public function getSignedBluinsightsUrl()
    {
        $result = parent::getSignedBluinsightsUrl();
        return new GetSignedBluinsightsUrlResponse($result->toArray());
    }
}
