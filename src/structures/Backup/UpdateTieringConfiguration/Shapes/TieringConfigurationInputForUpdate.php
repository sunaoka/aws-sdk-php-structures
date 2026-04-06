<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateTieringConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourceSelection> $ResourceSelection
 * @property string $BackupVaultName
 */
class TieringConfigurationInputForUpdate extends Shape
{
    /**
     * @param array{
     *     ResourceSelection: list<ResourceSelection>,
     *     BackupVaultName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
