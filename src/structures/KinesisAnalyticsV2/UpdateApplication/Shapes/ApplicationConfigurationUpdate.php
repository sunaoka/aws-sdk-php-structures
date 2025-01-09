<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SqlApplicationConfigurationUpdate $SqlApplicationConfigurationUpdate
 * @property ApplicationCodeConfigurationUpdate $ApplicationCodeConfigurationUpdate
 * @property FlinkApplicationConfigurationUpdate $FlinkApplicationConfigurationUpdate
 * @property EnvironmentPropertyUpdates $EnvironmentPropertyUpdates
 * @property ApplicationSnapshotConfigurationUpdate $ApplicationSnapshotConfigurationUpdate
 * @property ApplicationSystemRollbackConfigurationUpdate $ApplicationSystemRollbackConfigurationUpdate
 * @property list<VpcConfigurationUpdate> $VpcConfigurationUpdates
 * @property ZeppelinApplicationConfigurationUpdate $ZeppelinApplicationConfigurationUpdate
 */
class ApplicationConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     SqlApplicationConfigurationUpdate?: SqlApplicationConfigurationUpdate,
     *     ApplicationCodeConfigurationUpdate?: ApplicationCodeConfigurationUpdate,
     *     FlinkApplicationConfigurationUpdate?: FlinkApplicationConfigurationUpdate,
     *     EnvironmentPropertyUpdates?: EnvironmentPropertyUpdates,
     *     ApplicationSnapshotConfigurationUpdate?: ApplicationSnapshotConfigurationUpdate,
     *     ApplicationSystemRollbackConfigurationUpdate?: ApplicationSystemRollbackConfigurationUpdate,
     *     VpcConfigurationUpdates?: list<VpcConfigurationUpdate>,
     *     ZeppelinApplicationConfigurationUpdate?: ZeppelinApplicationConfigurationUpdate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
