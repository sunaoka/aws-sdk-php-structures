<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateKmsKeyId;

trait AssociateKmsKeyIdTrait
{
    /**
     * @param AssociateKmsKeyIdRequest $args
     * @return AssociateKmsKeyIdResponse
     */
    public function associateKmsKeyId(AssociateKmsKeyIdRequest $args)
    {
        $result = parent::associateKmsKeyId($args->toArray());
        return new AssociateKmsKeyIdResponse($result->toArray());
    }
}
