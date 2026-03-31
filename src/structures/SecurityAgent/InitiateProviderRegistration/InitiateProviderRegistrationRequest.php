<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\InitiateProviderRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'GITHUB' $provider
 */
class InitiateProviderRegistrationRequest extends Request
{
    /**
     * @param array{provider: 'GITHUB'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
