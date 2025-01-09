<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectionOAuthClientResponseParameters $ClientParameters
 * @property string $AuthorizationEndpoint
 * @property 'GET'|'POST'|'PUT' $HttpMethod
 * @property ConnectionHttpParameters $OAuthHttpParameters
 */
class ConnectionOAuthResponseParameters extends Shape
{
    /**
     * @param array{
     *     ClientParameters?: ConnectionOAuthClientResponseParameters,
     *     AuthorizationEndpoint?: string,
     *     HttpMethod?: 'GET'|'POST'|'PUT',
     *     OAuthHttpParameters?: ConnectionHttpParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
