<?php

namespace Sunaoka\Aws\Structures\Batch\CreateJobQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $order
 * @property string $serviceEnvironment
 */
class ServiceEnvironmentOrder extends Shape
{
    /**
     * @param array{
     *     order: int,
     *     serviceEnvironment: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
