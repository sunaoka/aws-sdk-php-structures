<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Lifecycle $Lifecycle
 * @property string $DestinationBackupVaultArn
 */
class CopyAction extends Shape
{
    /**
     * @param array{
     *     Lifecycle?: Lifecycle,
     *     DestinationBackupVaultArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
