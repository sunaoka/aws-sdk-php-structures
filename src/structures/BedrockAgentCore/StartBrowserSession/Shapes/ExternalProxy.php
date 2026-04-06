<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $server
 * @property int<1, 65535> $port
 * @property list<string>|null $domainPatterns
 * @property ProxyCredentials|null $credentials
 */
class ExternalProxy extends Shape
{
    /**
     * @param array{
     *     server: string,
     *     port: int<1, 65535>,
     *     domainPatterns?: list<string>|null,
     *     credentials?: ProxyCredentials|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
