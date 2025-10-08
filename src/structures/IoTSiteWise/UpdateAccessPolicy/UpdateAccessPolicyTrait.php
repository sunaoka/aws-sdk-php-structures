<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAccessPolicy;

trait UpdateAccessPolicyTrait
{
    /**
     * @param UpdateAccessPolicyRequest $args
     * @return UpdateAccessPolicyResponse
     */
    public function updateAccessPolicy(UpdateAccessPolicyRequest $args)
    {
        $result = parent::updateAccessPolicy($args->toArray());
        return new UpdateAccessPolicyResponse($result->toArray());
    }
}
