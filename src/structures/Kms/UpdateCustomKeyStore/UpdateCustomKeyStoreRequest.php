<?php

namespace Sunaoka\Aws\Structures\Kms\UpdateCustomKeyStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomKeyStoreId
 * @property string|null $NewCustomKeyStoreName
 * @property string|null $KeyStorePassword
 * @property string|null $CloudHsmClusterId
 * @property string|null $XksProxyUriEndpoint
 * @property string|null $XksProxyUriPath
 * @property string|null $XksProxyVpcEndpointServiceName
 * @property Shapes\XksProxyAuthenticationCredentialType|null $XksProxyAuthenticationCredential
 * @property 'PUBLIC_ENDPOINT'|'VPC_ENDPOINT_SERVICE'|null $XksProxyConnectivity
 */
class UpdateCustomKeyStoreRequest extends Request
{
    /**
     * @param array{
     *     CustomKeyStoreId: string,
     *     NewCustomKeyStoreName?: string|null,
     *     KeyStorePassword?: string|null,
     *     CloudHsmClusterId?: string|null,
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
