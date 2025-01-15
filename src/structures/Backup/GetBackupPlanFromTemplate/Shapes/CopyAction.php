<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlanFromTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Lifecycle|null $Lifecycle
 * @property string $DestinationBackupVaultArn
 */
class CopyAction extends Shape
{
    /**
     * @param array{
     *     Lifecycle?: Lifecycle|null,
     *     DestinationBackupVaultArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
