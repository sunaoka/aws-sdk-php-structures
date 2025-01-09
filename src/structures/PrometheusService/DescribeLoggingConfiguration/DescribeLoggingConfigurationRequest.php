<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 */
class DescribeLoggingConfigurationRequest extends Request
{
    /**
     * @param array{workspaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
