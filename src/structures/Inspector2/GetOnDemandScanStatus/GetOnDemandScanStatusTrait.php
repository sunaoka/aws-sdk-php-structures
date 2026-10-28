<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetOnDemandScanStatus;

trait GetOnDemandScanStatusTrait
{
    /**
     * @param GetOnDemandScanStatusRequest $args
     * @return GetOnDemandScanStatusResponse
     */
    public function getOnDemandScanStatus(GetOnDemandScanStatusRequest $args)
    {
        $result = parent::getOnDemandScanStatus($args->toArray());
        return new GetOnDemandScanStatusResponse($result->toArray());
    }
}
