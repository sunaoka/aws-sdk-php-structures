<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ZeppelinMonitoringConfigurationUpdate $MonitoringConfigurationUpdate
 * @property CatalogConfigurationUpdate $CatalogConfigurationUpdate
 * @property DeployAsApplicationConfigurationUpdate $DeployAsApplicationConfigurationUpdate
 * @property list<CustomArtifactConfiguration> $CustomArtifactsConfigurationUpdate
 */
class ZeppelinApplicationConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     MonitoringConfigurationUpdate?: ZeppelinMonitoringConfigurationUpdate,
     *     CatalogConfigurationUpdate?: CatalogConfigurationUpdate,
     *     DeployAsApplicationConfigurationUpdate?: DeployAsApplicationConfigurationUpdate,
     *     CustomArtifactsConfigurationUpdate?: list<CustomArtifactConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
