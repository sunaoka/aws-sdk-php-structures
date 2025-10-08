<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $providerArn
 * @property list<string> $scopes
 * @property array<string, string>|null $customParameters
 */
class OAuthCredentialProvider extends Shape
{
    /**
     * @param array{
     *     providerArn: string,
     *     scopes: list<string>,
     *     customParameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
