<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectionBasicAuthResponseParameters $BasicAuthParameters
 * @property ConnectionOAuthResponseParameters $OAuthParameters
 * @property ConnectionApiKeyAuthResponseParameters $ApiKeyAuthParameters
 * @property ConnectionHttpParameters $InvocationHttpParameters
 */
class ConnectionAuthResponseParameters extends Shape
{
    /**
     * @param array{
     *     BasicAuthParameters?: ConnectionBasicAuthResponseParameters,
     *     OAuthParameters?: ConnectionOAuthResponseParameters,
     *     ApiKeyAuthParameters?: ConnectionApiKeyAuthResponseParameters,
     *     InvocationHttpParameters?: ConnectionHttpParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
