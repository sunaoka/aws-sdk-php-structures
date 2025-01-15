<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientContext
 * @property string|null $Qualifier
 * @property \Psr\Http\Message\StreamInterface|null $Payload
 */
class MaintenanceWindowLambdaParameters extends Shape
{
    /**
     * @param array{
     *     ClientContext?: string|null,
     *     Qualifier?: string|null,
     *     Payload?: \Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
