<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $integrationId
 * @property Shapes\UpdateProviderConfiguration $providerConfiguration
 */
class UpdateIntegrationRequest extends Request
{
    /**
     * @param array{
     *     integrationId: string,
     *     providerConfiguration: Shapes\UpdateProviderConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
