<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeAlertManagerDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 */
class DescribeAlertManagerDefinitionRequest extends Request
{
    /**
     * @param array{workspaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
