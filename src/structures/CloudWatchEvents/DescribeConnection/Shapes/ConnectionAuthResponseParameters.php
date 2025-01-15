<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectionBasicAuthResponseParameters|null $BasicAuthParameters
 * @property ConnectionOAuthResponseParameters|null $OAuthParameters
 * @property ConnectionApiKeyAuthResponseParameters|null $ApiKeyAuthParameters
 * @property ConnectionHttpParameters|null $InvocationHttpParameters
 */
class ConnectionAuthResponseParameters extends Shape
{
    /**
     * @param array{
     *     BasicAuthParameters?: ConnectionBasicAuthResponseParameters|null,
     *     OAuthParameters?: ConnectionOAuthResponseParameters|null,
     *     ApiKeyAuthParameters?: ConnectionApiKeyAuthResponseParameters|null,
     *     InvocationHttpParameters?: ConnectionHttpParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
