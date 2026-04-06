<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpcBlockPublicAccessExclusion;

trait DeleteVpcBlockPublicAccessExclusionTrait
{
    /**
     * @param DeleteVpcBlockPublicAccessExclusionRequest $args
     * @return DeleteVpcBlockPublicAccessExclusionResponse
     */
    public function deleteVpcBlockPublicAccessExclusion(DeleteVpcBlockPublicAccessExclusionRequest $args)
    {
        $result = parent::deleteVpcBlockPublicAccessExclusion($args->toArray());
        return new DeleteVpcBlockPublicAccessExclusionResponse($result->toArray());
    }
}
