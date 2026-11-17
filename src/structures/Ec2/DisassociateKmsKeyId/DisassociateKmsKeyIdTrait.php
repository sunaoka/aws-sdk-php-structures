<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateKmsKeyId;

trait DisassociateKmsKeyIdTrait
{
    /**
     * @param DisassociateKmsKeyIdRequest $args
     * @return DisassociateKmsKeyIdResponse
     */
    public function disassociateKmsKeyId(DisassociateKmsKeyIdRequest $args)
    {
        $result = parent::disassociateKmsKeyId($args->toArray());
        return new DisassociateKmsKeyIdResponse($result->toArray());
    }
}
