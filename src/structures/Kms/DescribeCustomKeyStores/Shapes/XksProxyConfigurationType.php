<?php

namespace Sunaoka\Aws\Structures\Kms\DescribeCustomKeyStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PUBLIC_ENDPOINT'|'VPC_ENDPOINT_SERVICE'|null $Connectivity
 * @property string|null $AccessKeyId
 * @property string|null $UriEndpoint
 * @property string|null $UriPath
 * @property string|null $VpcEndpointServiceName
 * @property string|null $VpcEndpointServiceOwner
 */
class XksProxyConfigurationType extends Shape
{
    /**
     * @param array{
     *     Connectivity?: 'PUBLIC_ENDPOINT'|'VPC_ENDPOINT_SERVICE'|null,
     *     AccessKeyId?: string|null,
     *     UriEndpoint?: string|null,
     *     UriPath?: string|null,
     *     VpcEndpointServiceName?: string|null,
     *     VpcEndpointServiceOwner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
