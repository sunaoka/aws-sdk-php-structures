<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateAnycastIpList;

trait UpdateAnycastIpListTrait
{
    /**
     * @param UpdateAnycastIpListRequest $args
     * @return UpdateAnycastIpListResponse
     */
    public function updateAnycastIpList(UpdateAnycastIpListRequest $args)
    {
        $result = parent::updateAnycastIpList($args->toArray());
        return new UpdateAnycastIpListResponse($result->toArray());
    }
}
