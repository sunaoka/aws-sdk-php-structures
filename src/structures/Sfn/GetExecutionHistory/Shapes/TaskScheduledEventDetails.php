<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property string $resource
 * @property string $region
 * @property string $parameters
 * @property int $timeoutInSeconds
 * @property int $heartbeatInSeconds
 * @property TaskCredentials $taskCredentials
 */
class TaskScheduledEventDetails extends Shape
{
    /**
     * @param array{
     *     resourceType: string,
     *     resource: string,
     *     region: string,
     *     parameters: string,
     *     timeoutInSeconds?: int,
     *     heartbeatInSeconds?: int,
     *     taskCredentials?: TaskCredentials
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
