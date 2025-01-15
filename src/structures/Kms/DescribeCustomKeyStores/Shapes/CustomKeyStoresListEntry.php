<?php

namespace Sunaoka\Aws\Structures\Kms\DescribeCustomKeyStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomKeyStoreId
 * @property string|null $CustomKeyStoreName
 * @property string|null $CloudHsmClusterId
 * @property string|null $TrustAnchorCertificate
 * @property 'CONNECTED'|'CONNECTING'|'FAILED'|'DISCONNECTED'|'DISCONNECTING'|null $ConnectionState
 * @property 'INVALID_CREDENTIALS'|'CLUSTER_NOT_FOUND'|'NETWORK_ERRORS'|'INTERNAL_ERROR'|'INSUFFICIENT_CLOUDHSM_HSMS'|'USER_LOCKED_OUT'|'USER_NOT_FOUND'|'USER_LOGGED_IN'|'SUBNET_NOT_FOUND'|'INSUFFICIENT_FREE_ADDRESSES_IN_SUBNET'|'XKS_PROXY_ACCESS_DENIED'|'XKS_PROXY_NOT_REACHABLE'|'XKS_VPC_ENDPOINT_SERVICE_NOT_FOUND'|'XKS_PROXY_INVALID_RESPONSE'|'XKS_PROXY_INVALID_CONFIGURATION'|'XKS_VPC_ENDPOINT_SERVICE_INVALID_CONFIGURATION'|'XKS_PROXY_TIMED_OUT'|'XKS_PROXY_INVALID_TLS_CONFIGURATION'|null $ConnectionErrorCode
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property 'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE'|null $CustomKeyStoreType
 * @property XksProxyConfigurationType|null $XksProxyConfiguration
 */
class CustomKeyStoresListEntry extends Shape
{
    /**
     * @param array{
     *     CustomKeyStoreId?: string|null,
     *     CustomKeyStoreName?: string|null,
     *     CloudHsmClusterId?: string|null,
     *     TrustAnchorCertificate?: string|null,
     *     ConnectionState?: 'CONNECTED'|'CONNECTING'|'FAILED'|'DISCONNECTED'|'DISCONNECTING'|null,
     *     ConnectionErrorCode?: 'INVALID_CREDENTIALS'|'CLUSTER_NOT_FOUND'|'NETWORK_ERRORS'|'INTERNAL_ERROR'|'INSUFFICIENT_CLOUDHSM_HSMS'|'USER_LOCKED_OUT'|'USER_NOT_FOUND'|'USER_LOGGED_IN'|'SUBNET_NOT_FOUND'|'INSUFFICIENT_FREE_ADDRESSES_IN_SUBNET'|'XKS_PROXY_ACCESS_DENIED'|'XKS_PROXY_NOT_REACHABLE'|'XKS_VPC_ENDPOINT_SERVICE_NOT_FOUND'|'XKS_PROXY_INVALID_RESPONSE'|'XKS_PROXY_INVALID_CONFIGURATION'|'XKS_VPC_ENDPOINT_SERVICE_INVALID_CONFIGURATION'|'XKS_PROXY_TIMED_OUT'|'XKS_PROXY_INVALID_TLS_CONFIGURATION'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     CustomKeyStoreType?: 'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE'|null,
     *     XksProxyConfiguration?: XksProxyConfigurationType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
