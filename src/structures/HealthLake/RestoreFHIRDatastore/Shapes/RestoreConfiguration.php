<?php

namespace Sunaoka\Aws\Structures\HealthLake\RestoreFHIRDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContinuousBackupRestoreConfiguration|null $ContinuousBackupRestoreConfiguration
 */
class RestoreConfiguration extends Shape
{
    /**
     * @param array{ContinuousBackupRestoreConfiguration?: ContinuousBackupRestoreConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
