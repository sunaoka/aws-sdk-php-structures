<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetStorageInfo;

trait GetStorageInfoTrait
{
    /**
     * @return GetStorageInfoResponse
     */
    public function getStorageInfo()
    {
        $result = parent::getStorageInfo();
        return new GetStorageInfoResponse($result->toArray());
    }
}
