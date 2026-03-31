<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clientName
 * @property string $clientId
 * @property array<string, string>|null $exchangeParameters
 * @property string $returnToEndpoint
 * @property string $authorizationUrl
 * @property string $exchangeUrl
 * @property string|null $clientSecret
 * @property bool|null $supportCodeChallenge
 * @property list<string>|null $scopes
 */
class MCPServerOAuth3LOConfig extends Shape
{
    /**
     * @param array{
     *     clientName?: string|null,
     *     clientId: string,
     *     exchangeParameters?: array<string, string>|null,
     *     returnToEndpoint: string,
     *     authorizationUrl: string,
     *     exchangeUrl: string,
     *     clientSecret?: string|null,
     *     supportCodeChallenge?: bool|null,
     *     scopes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
