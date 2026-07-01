<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyAccountVpcEncryptionControl;

trait ModifyAccountVpcEncryptionControlTrait
{
    /**
     * @param ModifyAccountVpcEncryptionControlRequest $args
     * @return ModifyAccountVpcEncryptionControlResponse
     */
    public function modifyAccountVpcEncryptionControl(ModifyAccountVpcEncryptionControlRequest $args)
    {
        $result = parent::modifyAccountVpcEncryptionControl($args->toArray());
        return new ModifyAccountVpcEncryptionControlResponse($result->toArray());
    }
}
