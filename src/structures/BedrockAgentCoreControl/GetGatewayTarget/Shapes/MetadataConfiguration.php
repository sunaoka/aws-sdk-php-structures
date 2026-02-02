<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $allowedRequestHeaders
 * @property list<string>|null $allowedQueryParameters
 * @property list<string>|null $allowedResponseHeaders
 */
class MetadataConfiguration extends Shape
{
    /**
     * @param array{
     *     allowedRequestHeaders?: list<string>|null,
     *     allowedQueryParameters?: list<string>|null,
     *     allowedResponseHeaders?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
