<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateConnectionOAuthClientRequestParameters $ClientParameters
 * @property string $AuthorizationEndpoint
 * @property 'GET'|'POST'|'PUT' $HttpMethod
 * @property ConnectionHttpParameters $OAuthHttpParameters
 */
class CreateConnectionOAuthRequestParameters extends Shape
{
    /**
     * @param array{
     *     ClientParameters: CreateConnectionOAuthClientRequestParameters,
     *     AuthorizationEndpoint: string,
     *     HttpMethod: 'GET'|'POST'|'PUT',
     *     OAuthHttpParameters?: ConnectionHttpParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
