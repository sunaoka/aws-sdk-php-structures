<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateEnclaveCertificateIamRole;

trait DisassociateEnclaveCertificateIamRoleTrait
{
    /**
     * @param DisassociateEnclaveCertificateIamRoleRequest $args
     * @return DisassociateEnclaveCertificateIamRoleResponse
     */
    public function disassociateEnclaveCertificateIamRole(DisassociateEnclaveCertificateIamRoleRequest $args)
    {
        $result = parent::disassociateEnclaveCertificateIamRole($args->toArray());
        return new DisassociateEnclaveCertificateIamRoleResponse($result->toArray());
    }
}
