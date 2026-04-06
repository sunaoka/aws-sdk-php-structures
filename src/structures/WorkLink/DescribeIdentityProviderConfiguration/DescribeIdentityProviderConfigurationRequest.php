<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeIdentityProviderConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 */
class DescribeIdentityProviderConfigurationRequest extends Request
{
    /**
     * @param array{FleetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
