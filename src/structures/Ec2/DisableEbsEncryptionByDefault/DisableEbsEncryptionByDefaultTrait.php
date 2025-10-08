<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableEbsEncryptionByDefault;

trait DisableEbsEncryptionByDefaultTrait
{
    /**
     * @param DisableEbsEncryptionByDefaultRequest $args
     * @return DisableEbsEncryptionByDefaultResponse
     */
    public function disableEbsEncryptionByDefault(DisableEbsEncryptionByDefaultRequest $args)
    {
        $result = parent::disableEbsEncryptionByDefault($args->toArray());
        return new DisableEbsEncryptionByDefaultResponse($result->toArray());
    }
}
