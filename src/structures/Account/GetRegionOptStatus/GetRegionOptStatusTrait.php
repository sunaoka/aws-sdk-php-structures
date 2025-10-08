<?php

namespace Sunaoka\Aws\Structures\Account\GetRegionOptStatus;

trait GetRegionOptStatusTrait
{
    /**
     * @param GetRegionOptStatusRequest $args
     * @return GetRegionOptStatusResponse
     */
    public function getRegionOptStatus(GetRegionOptStatusRequest $args)
    {
        $result = parent::getRegionOptStatus($args->toArray());
        return new GetRegionOptStatusResponse($result->toArray());
    }
}
