<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeCompanyNetworkConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 */
class DescribeCompanyNetworkConfigurationRequest extends Request
{
    /**
     * @param array{FleetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
