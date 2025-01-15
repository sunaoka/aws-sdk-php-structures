<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ZeppelinMonitoringConfigurationUpdate|null $MonitoringConfigurationUpdate
 * @property CatalogConfigurationUpdate|null $CatalogConfigurationUpdate
 * @property DeployAsApplicationConfigurationUpdate|null $DeployAsApplicationConfigurationUpdate
 * @property list<CustomArtifactConfiguration>|null $CustomArtifactsConfigurationUpdate
 */
class ZeppelinApplicationConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     MonitoringConfigurationUpdate?: ZeppelinMonitoringConfigurationUpdate|null,
     *     CatalogConfigurationUpdate?: CatalogConfigurationUpdate|null,
     *     DeployAsApplicationConfigurationUpdate?: DeployAsApplicationConfigurationUpdate|null,
     *     CustomArtifactsConfigurationUpdate?: list<CustomArtifactConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
