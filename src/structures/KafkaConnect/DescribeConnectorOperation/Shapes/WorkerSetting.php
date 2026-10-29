<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnectorOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacityDescription|null $capacity
 * @property list<PluginDescription>|null $plugins
 * @property WorkerConfigurationDescription|null $workerConfiguration
 * @property bool|null $useDefaultWorkerConfiguration
 */
class WorkerSetting extends Shape
{
    /**
     * @param array{
     *     capacity?: CapacityDescription|null,
     *     plugins?: list<PluginDescription>|null,
     *     workerConfiguration?: WorkerConfigurationDescription|null,
     *     useDefaultWorkerConfiguration?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
