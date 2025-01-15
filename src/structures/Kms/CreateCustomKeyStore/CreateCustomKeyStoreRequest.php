<?php

namespace Sunaoka\Aws\Structures\Kms\CreateCustomKeyStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomKeyStoreName
 * @property string|null $CloudHsmClusterId
 * @property string|null $TrustAnchorCertificate
 * @property string|null $KeyStorePassword
 * @property 'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE'|null $CustomKeyStoreType
 * @property string|null $XksProxyUriEndpoint
 * @property string|null $XksProxyUriPath
 * @property string|null $XksProxyVpcEndpointServiceName
 * @property Shapes\XksProxyAuthenticationCredentialType|null $XksProxyAuthenticationCredential
 * @property 'PUBLIC_ENDPOINT'|'VPC_ENDPOINT_SERVICE'|null $XksProxyConnectivity
 */
class CreateCustomKeyStoreRequest extends Request
{
    /**
     * @param array{
     *     CustomKeyStoreName: string,
     *     CloudHsmClusterId?: string|null,
     *     TrustAnchorCertificate?: string|null,
     *     KeyStorePassword?: string|null,
     *     CustomKeyStoreType?: 'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE'|null,
     *     XksProxyUriEndpoint?: string|null,
     *     XksProxyUriPath?: string|null,
     *     XksProxyVpcEndpointServiceName?: string|null,
     *     XksProxyAuthenticationCredential?: Shapes\XksProxyAuthenticationCredentialType|null,
     *     XksProxyConnectivity?: 'PUBLIC_ENDPOINT'|'VPC_ENDPOINT_SERVICE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
