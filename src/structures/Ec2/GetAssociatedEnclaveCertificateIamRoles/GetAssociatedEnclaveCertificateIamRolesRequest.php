<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAssociatedEnclaveCertificateIamRoles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 * @property bool $DryRun
 */
class GetAssociatedEnclaveCertificateIamRolesRequest extends Request
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
