<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAssociatedEnclaveCertificateIamRoles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateArn
 * @property bool|null $DryRun
 */
class GetAssociatedEnclaveCertificateIamRolesRequest extends Request
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
