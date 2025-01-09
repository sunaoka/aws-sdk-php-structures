<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataPath
 * @property string $Message
 */
class DashboardValidationMessage extends Shape
{
    /**
     * @param array{
     *     DataPath?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
