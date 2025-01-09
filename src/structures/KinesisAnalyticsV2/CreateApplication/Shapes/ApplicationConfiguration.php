<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SqlApplicationConfiguration $SqlApplicationConfiguration
 * @property FlinkApplicationConfiguration $FlinkApplicationConfiguration
 * @property EnvironmentProperties $EnvironmentProperties
 * @property ApplicationCodeConfiguration $ApplicationCodeConfiguration
 * @property ApplicationSnapshotConfiguration $ApplicationSnapshotConfiguration
 * @property ApplicationSystemRollbackConfiguration $ApplicationSystemRollbackConfiguration
 * @property list<VpcConfiguration> $VpcConfigurations
 * @property ZeppelinApplicationConfiguration $ZeppelinApplicationConfiguration
 */
class ApplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     SqlApplicationConfiguration?: SqlApplicationConfiguration,
     *     FlinkApplicationConfiguration?: FlinkApplicationConfiguration,
     *     EnvironmentProperties?: EnvironmentProperties,
     *     ApplicationCodeConfiguration?: ApplicationCodeConfiguration,
     *     ApplicationSnapshotConfiguration?: ApplicationSnapshotConfiguration,
     *     ApplicationSystemRollbackConfiguration?: ApplicationSystemRollbackConfiguration,
     *     VpcConfigurations?: list<VpcConfiguration>,
     *     ZeppelinApplicationConfiguration?: ZeppelinApplicationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
