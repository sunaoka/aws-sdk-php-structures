<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyName
 * @property OpenSearchResourceStatus $status
 */
class OpenSearchDataAccessPolicy extends Shape
{
    /**
     * @param array{
     *     policyName?: string,
     *     status?: OpenSearchResourceStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
