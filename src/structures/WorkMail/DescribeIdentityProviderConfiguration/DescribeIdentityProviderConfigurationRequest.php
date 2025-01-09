<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeIdentityProviderConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 */
class DescribeIdentityProviderConfigurationRequest extends Request
{
    /**
     * @param array{OrganizationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
