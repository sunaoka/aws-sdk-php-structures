<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstance;

trait ModifyVerifiedAccessInstanceTrait
{
    /**
     * @param ModifyVerifiedAccessInstanceRequest $args
     * @return ModifyVerifiedAccessInstanceResponse
     */
    public function modifyVerifiedAccessInstance(ModifyVerifiedAccessInstanceRequest $args)
    {
        $result = parent::modifyVerifiedAccessInstance($args->toArray());
        return new ModifyVerifiedAccessInstanceResponse($result->toArray());
    }
}
