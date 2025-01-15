<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property string $resource
 * @property string $region
 * @property string $parameters
 * @property int|null $timeoutInSeconds
 * @property int|null $heartbeatInSeconds
 * @property TaskCredentials|null $taskCredentials
 */
class TaskScheduledEventDetails extends Shape
{
    /**
     * @param array{
     *     resourceType: string,
     *     resource: string,
     *     region: string,
     *     parameters: string,
     *     timeoutInSeconds?: int|null,
     *     heartbeatInSeconds?: int|null,
     *     taskCredentials?: TaskCredentials|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
