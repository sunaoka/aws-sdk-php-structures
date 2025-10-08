<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpam;

trait DeleteIpamTrait
{
    /**
     * @param DeleteIpamRequest $args
     * @return DeleteIpamResponse
     */
    public function deleteIpam(DeleteIpamRequest $args)
    {
        $result = parent::deleteIpam($args->toArray());
        return new DeleteIpamResponse($result->toArray());
    }
}
