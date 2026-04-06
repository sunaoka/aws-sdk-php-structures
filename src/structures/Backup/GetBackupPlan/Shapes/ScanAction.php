<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GUARDDUTY'|null $MalwareScanner
 * @property 'FULL_SCAN'|'INCREMENTAL_SCAN'|null $ScanMode
 */
class ScanAction extends Shape
{
    /**
     * @param array{
     *     MalwareScanner?: 'GUARDDUTY'|null,
     *     ScanMode?: 'FULL_SCAN'|'INCREMENTAL_SCAN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
