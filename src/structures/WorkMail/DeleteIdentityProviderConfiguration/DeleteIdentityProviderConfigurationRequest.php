<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteIdentityProviderConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 */
class DeleteIdentityProviderConfigurationRequest extends Request
{
    /**
     * @param array{OrganizationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
