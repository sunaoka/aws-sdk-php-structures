<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateConnectionBasicAuthRequestParameters|null $BasicAuthParameters
 * @property CreateConnectionOAuthRequestParameters|null $OAuthParameters
 * @property CreateConnectionApiKeyAuthRequestParameters|null $ApiKeyAuthParameters
 * @property ConnectionHttpParameters|null $InvocationHttpParameters
 */
class CreateConnectionAuthRequestParameters extends Shape
{
    /**
     * @param array{
     *     BasicAuthParameters?: CreateConnectionBasicAuthRequestParameters|null,
     *     OAuthParameters?: CreateConnectionOAuthRequestParameters|null,
     *     ApiKeyAuthParameters?: CreateConnectionApiKeyAuthRequestParameters|null,
     *     InvocationHttpParameters?: ConnectionHttpParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
