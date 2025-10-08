<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcBlockPublicAccessOptions;

trait ModifyVpcBlockPublicAccessOptionsTrait
{
    /**
     * @param ModifyVpcBlockPublicAccessOptionsRequest $args
     * @return ModifyVpcBlockPublicAccessOptionsResponse
     */
    public function modifyVpcBlockPublicAccessOptions(ModifyVpcBlockPublicAccessOptionsRequest $args)
    {
        $result = parent::modifyVpcBlockPublicAccessOptions($args->toArray());
        return new ModifyVpcBlockPublicAccessOptionsResponse($result->toArray());
    }
}
