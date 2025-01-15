<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DocumentVersion
 * @property array<string, list<string>>|null $Parameters
 */
class MaintenanceWindowAutomationParameters extends Shape
{
    /**
     * @param array{
     *     DocumentVersion?: string|null,
     *     Parameters?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
