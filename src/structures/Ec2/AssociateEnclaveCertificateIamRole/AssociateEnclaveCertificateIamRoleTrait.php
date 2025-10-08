<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateEnclaveCertificateIamRole;

trait AssociateEnclaveCertificateIamRoleTrait
{
    /**
     * @param AssociateEnclaveCertificateIamRoleRequest $args
     * @return AssociateEnclaveCertificateIamRoleResponse
     */
    public function associateEnclaveCertificateIamRole(AssociateEnclaveCertificateIamRoleRequest $args)
    {
        $result = parent::associateEnclaveCertificateIamRole($args->toArray());
        return new AssociateEnclaveCertificateIamRoleResponse($result->toArray());
    }
}
