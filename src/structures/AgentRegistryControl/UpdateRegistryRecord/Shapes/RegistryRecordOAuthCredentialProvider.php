<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $providerArn
 * @property 'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|null $grantType
 * @property list<string>|null $scopes
 * @property array<string, string>|null $customParameters
 * @property string|null $returnUrl
 */
class RegistryRecordOAuthCredentialProvider extends Shape
{
    /**
     * @param array{
     *     providerArn: string,
     *     grantType?: 'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|null,
     *     scopes?: list<string>|null,
     *     customParameters?: array<string, string>|null,
     *     returnUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
