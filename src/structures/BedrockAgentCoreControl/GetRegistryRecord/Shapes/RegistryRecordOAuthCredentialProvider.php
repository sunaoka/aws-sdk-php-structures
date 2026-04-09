<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $providerArn
 * @property 'CLIENT_CREDENTIALS'|null $grantType
 * @property list<string>|null $scopes
 * @property array<string, string>|null $customParameters
 */
class RegistryRecordOAuthCredentialProvider extends Shape
{
    /**
     * @param array{
     *     providerArn: string,
     *     grantType?: 'CLIENT_CREDENTIALS'|null,
     *     scopes?: list<string>|null,
     *     customParameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
