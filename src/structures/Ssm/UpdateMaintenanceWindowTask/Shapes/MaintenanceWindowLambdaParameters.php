<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientContext
 * @property string $Qualifier
 * @property string|resource|\Psr\Http\Message\StreamInterface $Payload
 */
class MaintenanceWindowLambdaParameters extends Shape
{
    /**
     * @param array{
     *     ClientContext?: string,
     *     Qualifier?: string,
     *     Payload?: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
