<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableEbsEncryptionByDefault;

trait EnableEbsEncryptionByDefaultTrait
{
    /**
     * @param EnableEbsEncryptionByDefaultRequest $args
     * @return EnableEbsEncryptionByDefaultResponse
     */
    public function enableEbsEncryptionByDefault(EnableEbsEncryptionByDefaultRequest $args)
    {
        $result = parent::enableEbsEncryptionByDefault($args->toArray());
        return new EnableEbsEncryptionByDefaultResponse($result->toArray());
    }
}
