<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlanFromJSON\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property array<string, string>|null $BackupOptions
 */
class AdvancedBackupSetting extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     BackupOptions?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
