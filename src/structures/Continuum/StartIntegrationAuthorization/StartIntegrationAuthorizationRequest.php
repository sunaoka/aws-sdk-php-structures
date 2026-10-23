<?php

namespace Sunaoka\Aws\Structures\Continuum\StartIntegrationAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'GITHUB' $providerType
 * @property string|null $name
 */
class StartIntegrationAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     providerType: 'GITHUB',
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
