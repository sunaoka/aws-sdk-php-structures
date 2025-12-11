<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpnConcentrator;

trait DeleteVpnConcentratorTrait
{
    /**
     * @param DeleteVpnConcentratorRequest $args
     * @return DeleteVpnConcentratorResponse
     */
    public function deleteVpnConcentrator(DeleteVpnConcentratorRequest $args)
    {
        $result = parent::deleteVpnConcentrator($args->toArray());
        return new DeleteVpnConcentratorResponse($result->toArray());
    }
}
