<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEncryptionControl;

trait CreateVpcEncryptionControlTrait
{
    /**
     * @param CreateVpcEncryptionControlRequest $args
     * @return CreateVpcEncryptionControlResponse
     */
    public function createVpcEncryptionControl(CreateVpcEncryptionControlRequest $args)
    {
        $result = parent::createVpcEncryptionControl($args->toArray());
        return new CreateVpcEncryptionControlResponse($result->toArray());
    }
}
