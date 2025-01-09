<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateConnectionBasicAuthRequestParameters $BasicAuthParameters
 * @property UpdateConnectionOAuthRequestParameters $OAuthParameters
 * @property UpdateConnectionApiKeyAuthRequestParameters $ApiKeyAuthParameters
 * @property ConnectionHttpParameters $InvocationHttpParameters
 */
class UpdateConnectionAuthRequestParameters extends Shape
{
    /**
     * @param array{
     *     BasicAuthParameters?: UpdateConnectionBasicAuthRequestParameters,
     *     OAuthParameters?: UpdateConnectionOAuthRequestParameters,
     *     ApiKeyAuthParameters?: UpdateConnectionApiKeyAuthRequestParameters,
     *     InvocationHttpParameters?: ConnectionHttpParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
