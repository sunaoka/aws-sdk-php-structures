<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateConnectionOAuthClientRequestParameters $ClientParameters
 * @property string $AuthorizationEndpoint
 * @property 'GET'|'POST'|'PUT' $HttpMethod
 * @property ConnectionHttpParameters $OAuthHttpParameters
 */
class UpdateConnectionOAuthRequestParameters extends Shape
{
    /**
     * @param array{
     *     ClientParameters?: UpdateConnectionOAuthClientRequestParameters,
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
