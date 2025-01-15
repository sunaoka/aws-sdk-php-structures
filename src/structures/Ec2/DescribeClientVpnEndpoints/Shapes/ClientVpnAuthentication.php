<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'certificate-authentication'|'directory-service-authentication'|'federated-authentication'|null $Type
 * @property DirectoryServiceAuthentication|null $ActiveDirectory
 * @property CertificateAuthentication|null $MutualAuthentication
 * @property FederatedAuthentication|null $FederatedAuthentication
 */
class ClientVpnAuthentication extends Shape
{
    /**
     * @param array{
     *     Type?: 'certificate-authentication'|'directory-service-authentication'|'federated-authentication'|null,
     *     ActiveDirectory?: DirectoryServiceAuthentication|null,
     *     MutualAuthentication?: CertificateAuthentication|null,
     *     FederatedAuthentication?: FederatedAuthentication|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
