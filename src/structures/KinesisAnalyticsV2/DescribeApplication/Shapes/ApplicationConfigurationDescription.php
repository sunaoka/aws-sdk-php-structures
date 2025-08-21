<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SqlApplicationConfigurationDescription|null $SqlApplicationConfigurationDescription
 * @property ApplicationCodeConfigurationDescription|null $ApplicationCodeConfigurationDescription
 * @property RunConfigurationDescription|null $RunConfigurationDescription
 * @property FlinkApplicationConfigurationDescription|null $FlinkApplicationConfigurationDescription
 * @property EnvironmentPropertyDescriptions|null $EnvironmentPropertyDescriptions
 * @property ApplicationSnapshotConfigurationDescription|null $ApplicationSnapshotConfigurationDescription
 * @property ApplicationSystemRollbackConfigurationDescription|null $ApplicationSystemRollbackConfigurationDescription
 * @property list<VpcConfigurationDescription>|null $VpcConfigurationDescriptions
 * @property ZeppelinApplicationConfigurationDescription|null $ZeppelinApplicationConfigurationDescription
 * @property ApplicationEncryptionConfigurationDescription|null $ApplicationEncryptionConfigurationDescription
 */
class ApplicationConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     SqlApplicationConfigurationDescription?: SqlApplicationConfigurationDescription|null,
     *     ApplicationCodeConfigurationDescription?: ApplicationCodeConfigurationDescription|null,
     *     RunConfigurationDescription?: RunConfigurationDescription|null,
     *     FlinkApplicationConfigurationDescription?: FlinkApplicationConfigurationDescription|null,
     *     EnvironmentPropertyDescriptions?: EnvironmentPropertyDescriptions|null,
     *     ApplicationSnapshotConfigurationDescription?: ApplicationSnapshotConfigurationDescription|null,
     *     ApplicationSystemRollbackConfigurationDescription?: ApplicationSystemRollbackConfigurationDescription|null,
     *     VpcConfigurationDescriptions?: list<VpcConfigurationDescription>|null,
     *     ZeppelinApplicationConfigurationDescription?: ZeppelinApplicationConfigurationDescription|null,
     *     ApplicationEncryptionConfigurationDescription?: ApplicationEncryptionConfigurationDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
