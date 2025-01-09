<?php

namespace Sunaoka\Aws\Structures\Kms\DescribeCustomKeyStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomKeyStoreId
 * @property string $CustomKeyStoreName
 * @property string $CloudHsmClusterId
 * @property string $TrustAnchorCertificate
 * @property 'CONNECTED'|'CONNECTING'|'FAILED'|'DISCONNECTED'|'DISCONNECTING' $ConnectionState
 * @property 'INVALID_CREDENTIALS'|'CLUSTER_NOT_FOUND'|'NETWORK_ERRORS'|'INTERNAL_ERROR'|'INSUFFICIENT_CLOUDHSM_HSMS'|'USER_LOCKED_OUT'|'USER_NOT_FOUND'|'USER_LOGGED_IN'|'SUBNET_NOT_FOUND'|'INSUFFICIENT_FREE_ADDRESSES_IN_SUBNET'|'XKS_PROXY_ACCESS_DENIED'|'XKS_PROXY_NOT_REACHABLE'|'XKS_VPC_ENDPOINT_SERVICE_NOT_FOUND'|'XKS_PROXY_INVALID_RESPONSE'|'XKS_PROXY_INVALID_CONFIGURATION'|'XKS_VPC_ENDPOINT_SERVICE_INVALID_CONFIGURATION'|'XKS_PROXY_TIMED_OUT'|'XKS_PROXY_INVALID_TLS_CONFIGURATION' $ConnectionErrorCode
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property 'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE' $CustomKeyStoreType
 * @property XksProxyConfigurationType $XksProxyConfiguration
 */
class CustomKeyStoresListEntry extends Shape
{
    /**
     * @param array{
     *     CustomKeyStoreId?: string,
     *     CustomKeyStoreName?: string,
     *     CloudHsmClusterId?: string,
     *     TrustAnchorCertificate?: string,
     *     ConnectionState?: 'CONNECTED'|'CONNECTING'|'FAILED'|'DISCONNECTED'|'DISCONNECTING',
     *     ConnectionErrorCode?: 'INVALID_CREDENTIALS'|'CLUSTER_NOT_FOUND'|'NETWORK_ERRORS'|'INTERNAL_ERROR'|'INSUFFICIENT_CLOUDHSM_HSMS'|'USER_LOCKED_OUT'|'USER_NOT_FOUND'|'USER_LOGGED_IN'|'SUBNET_NOT_FOUND'|'INSUFFICIENT_FREE_ADDRESSES_IN_SUBNET'|'XKS_PROXY_ACCESS_DENIED'|'XKS_PROXY_NOT_REACHABLE'|'XKS_VPC_ENDPOINT_SERVICE_NOT_FOUND'|'XKS_PROXY_INVALID_RESPONSE'|'XKS_PROXY_INVALID_CONFIGURATION'|'XKS_VPC_ENDPOINT_SERVICE_INVALID_CONFIGURATION'|'XKS_PROXY_TIMED_OUT'|'XKS_PROXY_INVALID_TLS_CONFIGURATION',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     CustomKeyStoreType?: 'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE',
     *     XksProxyConfiguration?: XksProxyConfigurationType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
