<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ZeppelinMonitoringConfiguration|null $MonitoringConfiguration
 * @property CatalogConfiguration|null $CatalogConfiguration
 * @property DeployAsApplicationConfiguration|null $DeployAsApplicationConfiguration
 * @property list<CustomArtifactConfiguration>|null $CustomArtifactsConfiguration
 */
class ZeppelinApplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     MonitoringConfiguration?: ZeppelinMonitoringConfiguration|null,
     *     CatalogConfiguration?: CatalogConfiguration|null,
     *     DeployAsApplicationConfiguration?: DeployAsApplicationConfiguration|null,
     *     CustomArtifactsConfiguration?: list<CustomArtifactConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
