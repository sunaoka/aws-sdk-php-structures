<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $BackupOptions
 * @property string|null $ResourceType
 */
class AwsBackupBackupPlanAdvancedBackupSettingsDetails extends Shape
{
    /**
     * @param array{
     *     BackupOptions?: array<string, string>|null,
     *     ResourceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
