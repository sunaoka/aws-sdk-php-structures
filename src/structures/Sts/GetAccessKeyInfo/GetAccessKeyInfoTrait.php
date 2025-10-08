<?php

namespace Sunaoka\Aws\Structures\Sts\GetAccessKeyInfo;

trait GetAccessKeyInfoTrait
{
    /**
     * @param GetAccessKeyInfoRequest $args
     * @return GetAccessKeyInfoResponse
     */
    public function getAccessKeyInfo(GetAccessKeyInfoRequest $args)
    {
        $result = parent::getAccessKeyInfo($args->toArray());
        return new GetAccessKeyInfoResponse($result->toArray());
    }
}
