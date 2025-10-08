<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateGroupCertificateAuthority;

trait CreateGroupCertificateAuthorityTrait
{
    /**
     * @param CreateGroupCertificateAuthorityRequest $args
     * @return CreateGroupCertificateAuthorityResponse
     */
    public function createGroupCertificateAuthority(CreateGroupCertificateAuthorityRequest $args)
    {
        $result = parent::createGroupCertificateAuthority($args->toArray());
        return new CreateGroupCertificateAuthorityResponse($result->toArray());
    }
}
