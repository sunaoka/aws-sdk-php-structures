<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'certificate-authentication'|'directory-service-authentication'|'federated-authentication' $Type
 * @property DirectoryServiceAuthenticationRequest $ActiveDirectory
 * @property CertificateAuthenticationRequest $MutualAuthentication
 * @property FederatedAuthenticationRequest $FederatedAuthentication
 */
class ClientVpnAuthenticationRequest extends Shape
{
    /**
     * @param array{
     *     Type?: 'certificate-authentication'|'directory-service-authentication'|'federated-authentication',
     *     ActiveDirectory?: DirectoryServiceAuthenticationRequest,
     *     MutualAuthentication?: CertificateAuthenticationRequest,
     *     FederatedAuthentication?: FederatedAuthenticationRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
