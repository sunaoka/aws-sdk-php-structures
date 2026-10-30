<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'reachability'|null $name
 * @property 'passed'|'failed'|'insufficient-data'|'initializing'|null $status
 * @property \Aws\Api\DateTimeResult|null $impairedSince
 */
class InstanceHealthStatusDetail extends Shape
{
    /**
     * @param array{
     *     name?: 'reachability'|null,
     *     status?: 'passed'|'failed'|'insufficient-data'|'initializing'|null,
     *     impairedSince?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
