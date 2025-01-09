<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $BackupOptions
 * @property string $ResourceType
 */
class AwsBackupBackupPlanAdvancedBackupSettingsDetails extends Shape
{
    /**
     * @param array{
     *     BackupOptions?: array<string, string>,
     *     ResourceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
