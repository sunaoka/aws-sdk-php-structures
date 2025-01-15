<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataPath
 * @property string|null $Message
 */
class DashboardValidationMessage extends Shape
{
    /**
     * @param array{
     *     DataPath?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
