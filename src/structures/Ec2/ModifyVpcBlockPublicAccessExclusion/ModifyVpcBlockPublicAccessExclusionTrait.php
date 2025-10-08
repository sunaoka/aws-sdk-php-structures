<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcBlockPublicAccessExclusion;

trait ModifyVpcBlockPublicAccessExclusionTrait
{
    /**
     * @param ModifyVpcBlockPublicAccessExclusionRequest $args
     * @return ModifyVpcBlockPublicAccessExclusionResponse
     */
    public function modifyVpcBlockPublicAccessExclusion(ModifyVpcBlockPublicAccessExclusionRequest $args)
    {
        $result = parent::modifyVpcBlockPublicAccessExclusion($args->toArray());
        return new ModifyVpcBlockPublicAccessExclusionResponse($result->toArray());
    }
}
