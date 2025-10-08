<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $discoveryUrl
 * @property list<string>|null $allowedAudience
 * @property list<string>|null $allowedClients
 */
class CustomJWTAuthorizerConfiguration extends Shape
{
    /**
     * @param array{
     *     discoveryUrl: string,
     *     allowedAudience?: list<string>|null,
     *     allowedClients?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
