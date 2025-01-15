<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateConnectionBasicAuthRequestParameters|null $BasicAuthParameters
 * @property UpdateConnectionOAuthRequestParameters|null $OAuthParameters
 * @property UpdateConnectionApiKeyAuthRequestParameters|null $ApiKeyAuthParameters
 * @property ConnectionHttpParameters|null $InvocationHttpParameters
 */
class UpdateConnectionAuthRequestParameters extends Shape
{
    /**
     * @param array{
     *     BasicAuthParameters?: UpdateConnectionBasicAuthRequestParameters|null,
     *     OAuthParameters?: UpdateConnectionOAuthRequestParameters|null,
     *     ApiKeyAuthParameters?: UpdateConnectionApiKeyAuthRequestParameters|null,
     *     InvocationHttpParameters?: ConnectionHttpParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
