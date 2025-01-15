<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectionOAuthClientResponseParameters|null $ClientParameters
 * @property string|null $AuthorizationEndpoint
 * @property 'GET'|'POST'|'PUT'|null $HttpMethod
 * @property ConnectionHttpParameters|null $OAuthHttpParameters
 */
class ConnectionOAuthResponseParameters extends Shape
{
    /**
     * @param array{
     *     ClientParameters?: ConnectionOAuthClientResponseParameters|null,
     *     AuthorizationEndpoint?: string|null,
     *     HttpMethod?: 'GET'|'POST'|'PUT'|null,
     *     OAuthHttpParameters?: ConnectionHttpParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
