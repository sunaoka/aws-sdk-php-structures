<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpcEncryptionControl;

trait DeleteVpcEncryptionControlTrait
{
    /**
     * @param DeleteVpcEncryptionControlRequest $args
     * @return DeleteVpcEncryptionControlResponse
     */
    public function deleteVpcEncryptionControl(DeleteVpcEncryptionControlRequest $args)
    {
        $result = parent::deleteVpcEncryptionControl($args->toArray());
        return new DeleteVpcEncryptionControlResponse($result->toArray());
    }
}
