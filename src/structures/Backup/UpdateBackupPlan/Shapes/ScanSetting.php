<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateBackupPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GUARDDUTY'|null $MalwareScanner
 * @property list<string>|null $ResourceTypes
 * @property string|null $ScannerRoleArn
 */
class ScanSetting extends Shape
{
    /**
     * @param array{
     *     MalwareScanner?: 'GUARDDUTY'|null,
     *     ResourceTypes?: list<string>|null,
     *     ScannerRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
