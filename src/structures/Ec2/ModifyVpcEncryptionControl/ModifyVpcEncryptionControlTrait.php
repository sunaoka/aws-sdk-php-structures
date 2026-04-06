<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEncryptionControl;

trait ModifyVpcEncryptionControlTrait
{
    /**
     * @param ModifyVpcEncryptionControlRequest $args
     * @return ModifyVpcEncryptionControlResponse
     */
    public function modifyVpcEncryptionControl(ModifyVpcEncryptionControlRequest $args)
    {
        $result = parent::modifyVpcEncryptionControl($args->toArray());
        return new ModifyVpcEncryptionControlResponse($result->toArray());
    }
}
