<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectionBasicAuthResponseParameters $BasicAuthParameters
 * @property ConnectionOAuthResponseParameters $OAuthParameters
 * @property ConnectionApiKeyAuthResponseParameters $ApiKeyAuthParameters
 * @property ConnectionHttpParameters $InvocationHttpParameters
 * @property DescribeConnectionConnectivityParameters $ConnectivityParameters
 */
class ConnectionAuthResponseParameters extends Shape
{
    /**
     * @param array{
     *     BasicAuthParameters?: ConnectionBasicAuthResponseParameters,
     *     OAuthParameters?: ConnectionOAuthResponseParameters,
     *     ApiKeyAuthParameters?: ConnectionApiKeyAuthResponseParameters,
     *     InvocationHttpParameters?: ConnectionHttpParameters,
     *     ConnectivityParameters?: DescribeConnectionConnectivityParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
