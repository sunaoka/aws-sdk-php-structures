<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableImageBlockPublicAccess;

trait DisableImageBlockPublicAccessTrait
{
    /**
     * @param DisableImageBlockPublicAccessRequest $args
     * @return DisableImageBlockPublicAccessResponse
     */
    public function disableImageBlockPublicAccess(DisableImageBlockPublicAccessRequest $args)
    {
        $result = parent::disableImageBlockPublicAccess($args->toArray());
        return new DisableImageBlockPublicAccessResponse($result->toArray());
    }
}
