<?php

namespace Sunaoka\Aws\Structures\Kms\UpdateCustomKeyStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomKeyStoreId
 * @property string $NewCustomKeyStoreName
 * @property string $KeyStorePassword
 * @property string $CloudHsmClusterId
 * @property string $XksProxyUriEndpoint
 * @property string $XksProxyUriPath
 * @property string $XksProxyVpcEndpointServiceName
 * @property Shapes\XksProxyAuthenticationCredentialType $XksProxyAuthenticationCredential
 * @property 'PUBLIC_ENDPOINT'|'VPC_ENDPOINT_SERVICE' $XksProxyConnectivity
 */
class UpdateCustomKeyStoreRequest extends Request
{
    /**
     * @param array{
     *     CustomKeyStoreId: string,
     *     NewCustomKeyStoreName?: string,
     *     KeyStorePassword?: string,
     *     CloudHsmClusterId?: string,
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
