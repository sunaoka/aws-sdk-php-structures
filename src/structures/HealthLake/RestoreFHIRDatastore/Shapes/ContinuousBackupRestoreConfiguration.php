<?php

namespace Sunaoka\Aws\Structures\HealthLake\RestoreFHIRDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $RestorePointTime
 */
class ContinuousBackupRestoreConfiguration extends Shape
{
    /**
     * @param array{RestorePointTime?: \Aws\Api\DateTimeResult|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
