<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateConnectionOAuthClientRequestParameters|null $ClientParameters
 * @property string|null $AuthorizationEndpoint
 * @property 'GET'|'POST'|'PUT'|null $HttpMethod
 * @property ConnectionHttpParameters|null $OAuthHttpParameters
 */
class UpdateConnectionOAuthRequestParameters extends Shape
{
    /**
     * @param array{
     *     ClientParameters?: UpdateConnectionOAuthClientRequestParameters|null,
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
