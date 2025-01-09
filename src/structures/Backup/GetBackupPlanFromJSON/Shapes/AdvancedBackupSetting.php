<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlanFromJSON\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property array<string, string> $BackupOptions
 */
class AdvancedBackupSetting extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string,
     *     BackupOptions?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
