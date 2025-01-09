<?php

namespace Sunaoka\Aws\Structures\Kms\DescribeCustomKeyStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PUBLIC_ENDPOINT'|'VPC_ENDPOINT_SERVICE' $Connectivity
 * @property string $AccessKeyId
 * @property string $UriEndpoint
 * @property string $UriPath
 * @property string $VpcEndpointServiceName
 */
class XksProxyConfigurationType extends Shape
{
    /**
     * @param array{
     *     Connectivity?: 'PUBLIC_ENDPOINT'|'VPC_ENDPOINT_SERVICE',
     *     AccessKeyId?: string,
     *     UriEndpoint?: string,
     *     UriPath?: string,
     *     VpcEndpointServiceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
