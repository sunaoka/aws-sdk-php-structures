<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $applicationEndpoint
 * @property string|null $applicationArn
 * @property string|null $applicationId
 * @property OpenSearchResourceStatus|null $status
 */
class OpenSearchApplication extends Shape
{
    /**
     * @param array{
     *     applicationEndpoint?: string|null,
     *     applicationArn?: string|null,
     *     applicationId?: string|null,
     *     status?: OpenSearchResourceStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
