<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateConnectionBasicAuthRequestParameters $BasicAuthParameters
 * @property CreateConnectionOAuthRequestParameters $OAuthParameters
 * @property CreateConnectionApiKeyAuthRequestParameters $ApiKeyAuthParameters
 * @property ConnectionHttpParameters $InvocationHttpParameters
 */
class CreateConnectionAuthRequestParameters extends Shape
{
    /**
     * @param array{
     *     BasicAuthParameters?: CreateConnectionBasicAuthRequestParameters,
     *     OAuthParameters?: CreateConnectionOAuthRequestParameters,
     *     ApiKeyAuthParameters?: CreateConnectionApiKeyAuthRequestParameters,
     *     InvocationHttpParameters?: ConnectionHttpParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
