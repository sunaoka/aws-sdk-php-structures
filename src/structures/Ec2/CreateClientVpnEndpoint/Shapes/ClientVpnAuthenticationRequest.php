<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'certificate-authentication'|'directory-service-authentication'|'federated-authentication'|null $Type
 * @property DirectoryServiceAuthenticationRequest|null $ActiveDirectory
 * @property CertificateAuthenticationRequest|null $MutualAuthentication
 * @property FederatedAuthenticationRequest|null $FederatedAuthentication
 */
class ClientVpnAuthenticationRequest extends Shape
{
    /**
     * @param array{
     *     Type?: 'certificate-authentication'|'directory-service-authentication'|'federated-authentication'|null,
     *     ActiveDirectory?: DirectoryServiceAuthenticationRequest|null,
     *     MutualAuthentication?: CertificateAuthenticationRequest|null,
     *     FederatedAuthentication?: FederatedAuthenticationRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
