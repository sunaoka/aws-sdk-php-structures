<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\RollbackApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ZeppelinMonitoringConfigurationDescription $MonitoringConfigurationDescription
 * @property CatalogConfigurationDescription|null $CatalogConfigurationDescription
 * @property DeployAsApplicationConfigurationDescription|null $DeployAsApplicationConfigurationDescription
 * @property list<CustomArtifactConfigurationDescription>|null $CustomArtifactsConfigurationDescription
 */
class ZeppelinApplicationConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     MonitoringConfigurationDescription: ZeppelinMonitoringConfigurationDescription,
     *     CatalogConfigurationDescription?: CatalogConfigurationDescription|null,
     *     DeployAsApplicationConfigurationDescription?: DeployAsApplicationConfigurationDescription|null,
     *     CustomArtifactsConfigurationDescription?: list<CustomArtifactConfigurationDescription>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
