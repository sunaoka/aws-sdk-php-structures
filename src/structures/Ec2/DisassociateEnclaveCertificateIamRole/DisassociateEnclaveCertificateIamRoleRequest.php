<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateEnclaveCertificateIamRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 * @property string $RoleArn
 * @property bool|null $DryRun
 */
class DisassociateEnclaveCertificateIamRoleRequest extends Request
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     RoleArn: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
