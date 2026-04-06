<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SqlApplicationConfiguration|null $SqlApplicationConfiguration
 * @property FlinkApplicationConfiguration|null $FlinkApplicationConfiguration
 * @property EnvironmentProperties|null $EnvironmentProperties
 * @property ApplicationCodeConfiguration|null $ApplicationCodeConfiguration
 * @property ApplicationSnapshotConfiguration|null $ApplicationSnapshotConfiguration
 * @property ApplicationSystemRollbackConfiguration|null $ApplicationSystemRollbackConfiguration
 * @property list<VpcConfiguration>|null $VpcConfigurations
 * @property ZeppelinApplicationConfiguration|null $ZeppelinApplicationConfiguration
 */
class ApplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     SqlApplicationConfiguration?: SqlApplicationConfiguration|null,
     *     FlinkApplicationConfiguration?: FlinkApplicationConfiguration|null,
     *     EnvironmentProperties?: EnvironmentProperties|null,
     *     ApplicationCodeConfiguration?: ApplicationCodeConfiguration|null,
     *     ApplicationSnapshotConfiguration?: ApplicationSnapshotConfiguration|null,
     *     ApplicationSystemRollbackConfiguration?: ApplicationSystemRollbackConfiguration|null,
     *     VpcConfigurations?: list<VpcConfiguration>|null,
     *     ZeppelinApplicationConfiguration?: ZeppelinApplicationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
