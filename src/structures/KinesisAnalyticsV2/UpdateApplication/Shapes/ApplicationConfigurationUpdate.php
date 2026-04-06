<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SqlApplicationConfigurationUpdate|null $SqlApplicationConfigurationUpdate
 * @property ApplicationCodeConfigurationUpdate|null $ApplicationCodeConfigurationUpdate
 * @property FlinkApplicationConfigurationUpdate|null $FlinkApplicationConfigurationUpdate
 * @property EnvironmentPropertyUpdates|null $EnvironmentPropertyUpdates
 * @property ApplicationSnapshotConfigurationUpdate|null $ApplicationSnapshotConfigurationUpdate
 * @property ApplicationSystemRollbackConfigurationUpdate|null $ApplicationSystemRollbackConfigurationUpdate
 * @property list<VpcConfigurationUpdate>|null $VpcConfigurationUpdates
 * @property ZeppelinApplicationConfigurationUpdate|null $ZeppelinApplicationConfigurationUpdate
 * @property ApplicationEncryptionConfigurationUpdate|null $ApplicationEncryptionConfigurationUpdate
 */
class ApplicationConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     SqlApplicationConfigurationUpdate?: SqlApplicationConfigurationUpdate|null,
     *     ApplicationCodeConfigurationUpdate?: ApplicationCodeConfigurationUpdate|null,
     *     FlinkApplicationConfigurationUpdate?: FlinkApplicationConfigurationUpdate|null,
     *     EnvironmentPropertyUpdates?: EnvironmentPropertyUpdates|null,
     *     ApplicationSnapshotConfigurationUpdate?: ApplicationSnapshotConfigurationUpdate|null,
     *     ApplicationSystemRollbackConfigurationUpdate?: ApplicationSystemRollbackConfigurationUpdate|null,
     *     VpcConfigurationUpdates?: list<VpcConfigurationUpdate>|null,
     *     ZeppelinApplicationConfigurationUpdate?: ZeppelinApplicationConfigurationUpdate|null,
     *     ApplicationEncryptionConfigurationUpdate?: ApplicationEncryptionConfigurationUpdate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
