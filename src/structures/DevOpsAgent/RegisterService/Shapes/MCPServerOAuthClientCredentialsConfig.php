<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clientName
 * @property string $clientId
 * @property array<string, string>|null $exchangeParameters
 * @property string $clientSecret
 * @property string $exchangeUrl
 * @property list<string>|null $scopes
 */
class MCPServerOAuthClientCredentialsConfig extends Shape
{
    /**
     * @param array{
     *     clientName?: string|null,
     *     clientId: string,
     *     exchangeParameters?: array<string, string>|null,
     *     clientSecret: string,
     *     exchangeUrl: string,
     *     scopes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
