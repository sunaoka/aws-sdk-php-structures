<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property Shapes\ProviderConfiguration $providerConfiguration
 */
class CreateIntegrationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     providerConfiguration: Shapes\ProviderConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
