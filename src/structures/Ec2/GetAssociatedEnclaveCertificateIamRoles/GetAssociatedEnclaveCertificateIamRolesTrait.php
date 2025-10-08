<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAssociatedEnclaveCertificateIamRoles;

trait GetAssociatedEnclaveCertificateIamRolesTrait
{
    /**
     * @param GetAssociatedEnclaveCertificateIamRolesRequest $args
     * @return GetAssociatedEnclaveCertificateIamRolesResponse
     */
    public function getAssociatedEnclaveCertificateIamRoles(GetAssociatedEnclaveCertificateIamRolesRequest $args)
    {
        $result = parent::getAssociatedEnclaveCertificateIamRoles($args->toArray());
        return new GetAssociatedEnclaveCertificateIamRolesResponse($result->toArray());
    }
}
