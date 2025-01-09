<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ZeppelinMonitoringConfigurationDescription $MonitoringConfigurationDescription
 * @property CatalogConfigurationDescription $CatalogConfigurationDescription
 * @property DeployAsApplicationConfigurationDescription $DeployAsApplicationConfigurationDescription
 * @property list<CustomArtifactConfigurationDescription> $CustomArtifactsConfigurationDescription
 */
class ZeppelinApplicationConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     MonitoringConfigurationDescription: ZeppelinMonitoringConfigurationDescription,
     *     CatalogConfigurationDescription?: CatalogConfigurationDescription,
     *     DeployAsApplicationConfigurationDescription?: DeployAsApplicationConfigurationDescription,
     *     CustomArtifactsConfigurationDescription?: list<CustomArtifactConfigurationDescription>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
