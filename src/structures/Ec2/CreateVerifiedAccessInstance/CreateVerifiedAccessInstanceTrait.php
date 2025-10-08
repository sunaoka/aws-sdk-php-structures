<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessInstance;

trait CreateVerifiedAccessInstanceTrait
{
    /**
     * @param CreateVerifiedAccessInstanceRequest $args
     * @return CreateVerifiedAccessInstanceResponse
     */
    public function createVerifiedAccessInstance(CreateVerifiedAccessInstanceRequest $args)
    {
        $result = parent::createVerifiedAccessInstance($args->toArray());
        return new CreateVerifiedAccessInstanceResponse($result->toArray());
    }
}
