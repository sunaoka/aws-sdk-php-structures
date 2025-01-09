<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeEmailMonitoringConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 */
class DescribeEmailMonitoringConfigurationRequest extends Request
{
    /**
     * @param array{OrganizationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
