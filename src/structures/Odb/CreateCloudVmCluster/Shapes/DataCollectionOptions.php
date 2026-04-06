<?php

namespace Sunaoka\Aws\Structures\Odb\CreateCloudVmCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isDiagnosticsEventsEnabled
 * @property bool|null $isHealthMonitoringEnabled
 * @property bool|null $isIncidentLogsEnabled
 */
class DataCollectionOptions extends Shape
{
    /**
     * @param array{
     *     isDiagnosticsEventsEnabled?: bool|null,
     *     isHealthMonitoringEnabled?: bool|null,
     *     isIncidentLogsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
