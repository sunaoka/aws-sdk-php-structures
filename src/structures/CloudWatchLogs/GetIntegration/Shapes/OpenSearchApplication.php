<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationEndpoint
 * @property string $applicationArn
 * @property string $applicationId
 * @property OpenSearchResourceStatus $status
 */
class OpenSearchApplication extends Shape
{
    /**
     * @param array{
     *     applicationEndpoint?: string,
     *     applicationArn?: string,
     *     applicationId?: string,
     *     status?: OpenSearchResourceStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
