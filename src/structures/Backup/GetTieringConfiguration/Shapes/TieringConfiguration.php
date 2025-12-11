<?php

namespace Sunaoka\Aws\Structures\Backup\GetTieringConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TieringConfigurationName
 * @property string|null $TieringConfigurationArn
 * @property string $BackupVaultName
 * @property list<ResourceSelection> $ResourceSelection
 * @property string|null $CreatorRequestId
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class TieringConfiguration extends Shape
{
    /**
     * @param array{
     *     TieringConfigurationName: string,
     *     TieringConfigurationArn?: string|null,
     *     BackupVaultName: string,
     *     ResourceSelection: list<ResourceSelection>,
     *     CreatorRequestId?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
