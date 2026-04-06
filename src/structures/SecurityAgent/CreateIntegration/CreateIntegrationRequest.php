<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'GITHUB' $provider
 * @property Shapes\ProviderInput $input
 * @property string $integrationDisplayName
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 */
class CreateIntegrationRequest extends Request
{
    /**
     * @param array{
     *     provider: 'GITHUB',
     *     input: Shapes\ProviderInput,
     *     integrationDisplayName: string,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
