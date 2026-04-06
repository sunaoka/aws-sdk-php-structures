<?php

namespace Sunaoka\Aws\Structures\Backup\ListTieringConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TieringConfigurationArn
 * @property string|null $TieringConfigurationName
 * @property string|null $BackupVaultName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class TieringConfigurationsListMember extends Shape
{
    /**
     * @param array{
     *     TieringConfigurationArn?: string|null,
     *     TieringConfigurationName?: string|null,
     *     BackupVaultName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
