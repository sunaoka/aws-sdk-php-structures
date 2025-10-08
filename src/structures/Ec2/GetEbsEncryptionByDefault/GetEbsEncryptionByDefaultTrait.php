<?php

namespace Sunaoka\Aws\Structures\Ec2\GetEbsEncryptionByDefault;

trait GetEbsEncryptionByDefaultTrait
{
    /**
     * @param GetEbsEncryptionByDefaultRequest $args
     * @return GetEbsEncryptionByDefaultResponse
     */
    public function getEbsEncryptionByDefault(GetEbsEncryptionByDefaultRequest $args)
    {
        $result = parent::getEbsEncryptionByDefault($args->toArray());
        return new GetEbsEncryptionByDefaultResponse($result->toArray());
    }
}
