<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'GITHUB'|'GITLAB'|'BITBUCKET'|'CONFLUENCE' $provider
 * @property Shapes\ProviderInput $input
 * @property string $integrationDisplayName
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 * @property string|null $privateConnectionName
 */
class CreateIntegrationRequest extends Request
{
    /**
     * @param array{
     *     provider: 'GITHUB'|'GITLAB'|'BITBUCKET'|'CONFLUENCE',
     *     input: Shapes\ProviderInput,
     *     integrationDisplayName: string,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null,
     *     privateConnectionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
