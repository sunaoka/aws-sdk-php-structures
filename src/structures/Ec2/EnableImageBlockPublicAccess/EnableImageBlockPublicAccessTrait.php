<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableImageBlockPublicAccess;

trait EnableImageBlockPublicAccessTrait
{
    /**
     * @param EnableImageBlockPublicAccessRequest $args
     * @return EnableImageBlockPublicAccessResponse
     */
    public function enableImageBlockPublicAccess(EnableImageBlockPublicAccessRequest $args)
    {
        $result = parent::enableImageBlockPublicAccess($args->toArray());
        return new EnableImageBlockPublicAccessResponse($result->toArray());
    }
}
