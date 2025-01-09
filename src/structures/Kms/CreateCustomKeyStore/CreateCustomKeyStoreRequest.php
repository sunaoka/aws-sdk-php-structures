<?php

namespace Sunaoka\Aws\Structures\Kms\CreateCustomKeyStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomKeyStoreName
 * @property string $CloudHsmClusterId
 * @property string $TrustAnchorCertificate
 * @property string $KeyStorePassword
 * @property 'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE' $CustomKeyStoreType
 * @property string $XksProxyUriEndpoint
 * @property string $XksProxyUriPath
 * @property string $XksProxyVpcEndpointServiceName
 * @property Shapes\XksProxyAuthenticationCredentialType $XksProxyAuthenticationCredential
 * @property 'PUBLIC_ENDPOINT'|'VPC_ENDPOINT_SERVICE' $XksProxyConnectivity
 */
class CreateCustomKeyStoreRequest extends Request
{
    /**
     * @param array{
     *     CustomKeyStoreName: string,
     *     CloudHsmClusterId?: string,
     *     TrustAnchorCertificate?: string,
     *     KeyStorePassword?: string,
     *     CustomKeyStoreType?: 'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE',
     *     XksProxyUriEndpoint?: string,
     *     XksProxyUriPath?: string,
     *     XksProxyVpcEndpointServiceName?: string,
     *     XksProxyAuthenticationCredential?: Shapes\XksProxyAuthenticationCredentialType,
     *     XksProxyConnectivity?: 'PUBLIC_ENDPOINT'|'VPC_ENDPOINT_SERVICE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
