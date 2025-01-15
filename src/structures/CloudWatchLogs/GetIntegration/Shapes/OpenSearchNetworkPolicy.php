<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $policyName
 * @property OpenSearchResourceStatus|null $status
 */
class OpenSearchNetworkPolicy extends Shape
{
    /**
     * @param array{
     *     policyName?: string|null,
     *     status?: OpenSearchResourceStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
