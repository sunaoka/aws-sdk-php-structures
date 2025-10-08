<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcBlockPublicAccessExclusion;

trait CreateVpcBlockPublicAccessExclusionTrait
{
    /**
     * @param CreateVpcBlockPublicAccessExclusionRequest $args
     * @return CreateVpcBlockPublicAccessExclusionResponse
     */
    public function createVpcBlockPublicAccessExclusion(CreateVpcBlockPublicAccessExclusionRequest $args)
    {
        $result = parent::createVpcBlockPublicAccessExclusion($args->toArray());
        return new CreateVpcBlockPublicAccessExclusionResponse($result->toArray());
    }
}
