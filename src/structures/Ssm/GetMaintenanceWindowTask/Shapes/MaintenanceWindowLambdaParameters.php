<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientContext
 * @property string $Qualifier
 * @property \Psr\Http\Message\StreamInterface $Payload
 */
class MaintenanceWindowLambdaParameters extends Shape
{
    /**
     * @param array{
     *     ClientContext?: string,
     *     Qualifier?: string,
     *     Payload?: \Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
