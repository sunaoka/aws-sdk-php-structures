<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeQueryLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 */
class DescribeQueryLoggingConfigurationRequest extends Request
{
    /**
     * @param array{workspaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
