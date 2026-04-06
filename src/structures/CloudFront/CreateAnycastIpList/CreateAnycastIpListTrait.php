<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateAnycastIpList;

trait CreateAnycastIpListTrait
{
    /**
     * @param CreateAnycastIpListRequest $args
     * @return CreateAnycastIpListResponse
     */
    public function createAnycastIpList(CreateAnycastIpListRequest $args)
    {
        $result = parent::createAnycastIpList($args->toArray());
        return new CreateAnycastIpListResponse($result->toArray());
    }
}
