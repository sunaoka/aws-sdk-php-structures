<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ZeppelinMonitoringConfiguration $MonitoringConfiguration
 * @property CatalogConfiguration $CatalogConfiguration
 * @property DeployAsApplicationConfiguration $DeployAsApplicationConfiguration
 * @property list<CustomArtifactConfiguration> $CustomArtifactsConfiguration
 */
class ZeppelinApplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     MonitoringConfiguration?: ZeppelinMonitoringConfiguration,
     *     CatalogConfiguration?: CatalogConfiguration,
     *     DeployAsApplicationConfiguration?: DeployAsApplicationConfiguration,
     *     CustomArtifactsConfiguration?: list<CustomArtifactConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
