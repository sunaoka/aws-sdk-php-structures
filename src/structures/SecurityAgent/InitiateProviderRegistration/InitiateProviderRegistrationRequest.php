<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\InitiateProviderRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'GITHUB'|'GITLAB'|'BITBUCKET'|'CONFLUENCE' $provider
 */
class InitiateProviderRegistrationRequest extends Request
{
    /**
     * @param array{provider: 'GITHUB'|'GITLAB'|'BITBUCKET'|'CONFLUENCE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
