<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateEnclaveCertificateIamRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 * @property string $RoleArn
 * @property bool $DryRun
 */
class AssociateEnclaveCertificateIamRoleRequest extends Request
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     RoleArn: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
