<?php

namespace Sunaoka\Aws\Structures\Backup\CreateTieringConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TieringConfigurationName
 * @property string $BackupVaultName
 * @property list<ResourceSelection> $ResourceSelection
 */
class TieringConfigurationInputForCreate extends Shape
{
    /**
     * @param array{
     *     TieringConfigurationName: string,
     *     BackupVaultName: string,
     *     ResourceSelection: list<ResourceSelection>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
