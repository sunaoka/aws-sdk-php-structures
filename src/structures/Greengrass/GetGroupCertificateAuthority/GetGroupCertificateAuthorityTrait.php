<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetGroupCertificateAuthority;

trait GetGroupCertificateAuthorityTrait
{
    /**
     * @param GetGroupCertificateAuthorityRequest $args
     * @return GetGroupCertificateAuthorityResponse
     */
    public function getGroupCertificateAuthority(GetGroupCertificateAuthorityRequest $args)
    {
        $result = parent::getGroupCertificateAuthority($args->toArray());
        return new GetGroupCertificateAuthorityResponse($result->toArray());
    }
}
