<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentVersion
 * @property array<string, list<string>> $Parameters
 */
class MaintenanceWindowAutomationParameters extends Shape
{
    /**
     * @param array{
     *     DocumentVersion?: string,
     *     Parameters?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
