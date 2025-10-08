<?php

namespace Sunaoka\Aws\Structures\Ec2\GetEbsDefaultKmsKeyId;

trait GetEbsDefaultKmsKeyIdTrait
{
    /**
     * @param GetEbsDefaultKmsKeyIdRequest $args
     * @return GetEbsDefaultKmsKeyIdResponse
     */
    public function getEbsDefaultKmsKeyId(GetEbsDefaultKmsKeyIdRequest $args)
    {
        $result = parent::getEbsDefaultKmsKeyId($args->toArray());
        return new GetEbsDefaultKmsKeyIdResponse($result->toArray());
    }
}
