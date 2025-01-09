<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\RollbackApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SqlApplicationConfigurationDescription $SqlApplicationConfigurationDescription
 * @property ApplicationCodeConfigurationDescription $ApplicationCodeConfigurationDescription
 * @property RunConfigurationDescription $RunConfigurationDescription
 * @property FlinkApplicationConfigurationDescription $FlinkApplicationConfigurationDescription
 * @property EnvironmentPropertyDescriptions $EnvironmentPropertyDescriptions
 * @property ApplicationSnapshotConfigurationDescription $ApplicationSnapshotConfigurationDescription
 * @property ApplicationSystemRollbackConfigurationDescription $ApplicationSystemRollbackConfigurationDescription
 * @property list<VpcConfigurationDescription> $VpcConfigurationDescriptions
 * @property ZeppelinApplicationConfigurationDescription $ZeppelinApplicationConfigurationDescription
 */
class ApplicationConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     SqlApplicationConfigurationDescription?: SqlApplicationConfigurationDescription,
     *     ApplicationCodeConfigurationDescription?: ApplicationCodeConfigurationDescription,
     *     RunConfigurationDescription?: RunConfigurationDescription,
     *     FlinkApplicationConfigurationDescription?: FlinkApplicationConfigurationDescription,
     *     EnvironmentPropertyDescriptions?: EnvironmentPropertyDescriptions,
     *     ApplicationSnapshotConfigurationDescription?: ApplicationSnapshotConfigurationDescription,
     *     ApplicationSystemRollbackConfigurationDescription?: ApplicationSystemRollbackConfigurationDescription,
     *     VpcConfigurationDescriptions?: list<VpcConfigurationDescription>,
     *     ZeppelinApplicationConfigurationDescription?: ZeppelinApplicationConfigurationDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
