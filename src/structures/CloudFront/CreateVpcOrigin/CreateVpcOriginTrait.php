<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateVpcOrigin;

trait CreateVpcOriginTrait
{
    /**
     * @param CreateVpcOriginRequest $args
     * @return CreateVpcOriginResponse
     */
    public function createVpcOrigin(CreateVpcOriginRequest $args)
    {
        $result = parent::createVpcOrigin($args->toArray());
        return new CreateVpcOriginResponse($result->toArray());
    }
}
