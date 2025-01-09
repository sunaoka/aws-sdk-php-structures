<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'certificate-authentication'|'directory-service-authentication'|'federated-authentication' $Type
 * @property DirectoryServiceAuthentication $ActiveDirectory
 * @property CertificateAuthentication $MutualAuthentication
 * @property FederatedAuthentication $FederatedAuthentication
 */
class ClientVpnAuthentication extends Shape
{
    /**
     * @param array{
     *     Type?: 'certificate-authentication'|'directory-service-authentication'|'federated-authentication',
     *     ActiveDirectory?: DirectoryServiceAuthentication,
     *     MutualAuthentication?: CertificateAuthentication,
     *     FederatedAuthentication?: FederatedAuthentication
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
