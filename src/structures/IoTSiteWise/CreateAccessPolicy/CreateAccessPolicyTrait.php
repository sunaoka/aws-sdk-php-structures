<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAccessPolicy;

trait CreateAccessPolicyTrait
{
    /**
     * @param CreateAccessPolicyRequest $args
     * @return CreateAccessPolicyResponse
     */
    public function createAccessPolicy(CreateAccessPolicyRequest $args)
    {
        $result = parent::createAccessPolicy($args->toArray());
        return new CreateAccessPolicyResponse($result->toArray());
    }
}
