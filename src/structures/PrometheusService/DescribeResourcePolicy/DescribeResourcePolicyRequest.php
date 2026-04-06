<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 */
class DescribeResourcePolicyRequest extends Request
{
    /**
     * @param array{workspaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
