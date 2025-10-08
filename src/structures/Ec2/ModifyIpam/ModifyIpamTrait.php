<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpam;

trait ModifyIpamTrait
{
    /**
     * @param ModifyIpamRequest $args
     * @return ModifyIpamResponse
     */
    public function modifyIpam(ModifyIpamRequest $args)
    {
        $result = parent::modifyIpam($args->toArray());
        return new ModifyIpamResponse($result->toArray());
    }
}
