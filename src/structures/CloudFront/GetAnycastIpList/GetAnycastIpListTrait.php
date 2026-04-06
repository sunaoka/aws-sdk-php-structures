<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetAnycastIpList;

trait GetAnycastIpListTrait
{
    /**
     * @param GetAnycastIpListRequest $args
     * @return GetAnycastIpListResponse
     */
    public function getAnycastIpList(GetAnycastIpListRequest $args)
    {
        $result = parent::getAnycastIpList($args->toArray());
        return new GetAnycastIpListResponse($result->toArray());
    }
}
