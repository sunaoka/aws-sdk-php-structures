<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetEbsDefaultKmsKeyId;

trait ResetEbsDefaultKmsKeyIdTrait
{
    /**
     * @param ResetEbsDefaultKmsKeyIdRequest $args
     * @return ResetEbsDefaultKmsKeyIdResponse
     */
    public function resetEbsDefaultKmsKeyId(ResetEbsDefaultKmsKeyIdRequest $args)
    {
        $result = parent::resetEbsDefaultKmsKeyId($args->toArray());
        return new ResetEbsDefaultKmsKeyIdResponse($result->toArray());
    }
}
