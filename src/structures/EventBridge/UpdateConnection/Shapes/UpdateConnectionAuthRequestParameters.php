<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateConnectionBasicAuthRequestParameters $BasicAuthParameters
 * @property UpdateConnectionOAuthRequestParameters $OAuthParameters
 * @property UpdateConnectionApiKeyAuthRequestParameters $ApiKeyAuthParameters
 * @property ConnectionHttpParameters $InvocationHttpParameters
 * @property ConnectivityResourceParameters $ConnectivityParameters
 */
class UpdateConnectionAuthRequestParameters extends Shape
{
    /**
     * @param array{
     *     BasicAuthParameters?: UpdateConnectionBasicAuthRequestParameters,
     *     OAuthParameters?: UpdateConnectionOAuthRequestParameters,
     *     ApiKeyAuthParameters?: UpdateConnectionApiKeyAuthRequestParameters,
     *     InvocationHttpParameters?: ConnectionHttpParameters,
     *     ConnectivityParameters?: ConnectivityResourceParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
