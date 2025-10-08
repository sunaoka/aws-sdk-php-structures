<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpam;

trait CreateIpamTrait
{
    /**
     * @param CreateIpamRequest $args
     * @return CreateIpamResponse
     */
    public function createIpam(CreateIpamRequest $args)
    {
        $result = parent::createIpam($args->toArray());
        return new CreateIpamResponse($result->toArray());
    }
}
