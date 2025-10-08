<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyEbsDefaultKmsKeyId;

trait ModifyEbsDefaultKmsKeyIdTrait
{
    /**
     * @param ModifyEbsDefaultKmsKeyIdRequest $args
     * @return ModifyEbsDefaultKmsKeyIdResponse
     */
    public function modifyEbsDefaultKmsKeyId(ModifyEbsDefaultKmsKeyIdRequest $args)
    {
        $result = parent::modifyEbsDefaultKmsKeyId($args->toArray());
        return new ModifyEbsDefaultKmsKeyIdResponse($result->toArray());
    }
}
