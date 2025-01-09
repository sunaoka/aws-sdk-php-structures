<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateConnectionBasicAuthRequestParameters $BasicAuthParameters
 * @property CreateConnectionOAuthRequestParameters $OAuthParameters
 * @property CreateConnectionApiKeyAuthRequestParameters $ApiKeyAuthParameters
 * @property ConnectionHttpParameters $InvocationHttpParameters
 * @property ConnectivityResourceParameters $ConnectivityParameters
 */
class CreateConnectionAuthRequestParameters extends Shape
{
    /**
     * @param array{
     *     BasicAuthParameters?: CreateConnectionBasicAuthRequestParameters,
     *     OAuthParameters?: CreateConnectionOAuthRequestParameters,
     *     ApiKeyAuthParameters?: CreateConnectionApiKeyAuthRequestParameters,
     *     InvocationHttpParameters?: ConnectionHttpParameters,
     *     ConnectivityParameters?: ConnectivityResourceParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
