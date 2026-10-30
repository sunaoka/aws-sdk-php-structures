<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ok'|'impaired'|'initializing'|'insufficient-data'|'not-applicable'|null $status
 * @property list<InstanceHealthStatusDetail>|null $details
 */
class InstanceHealthStatus extends Shape
{
    /**
     * @param array{
     *     status?: 'ok'|'impaired'|'initializing'|'insufficient-data'|'not-applicable'|null,
     *     details?: list<InstanceHealthStatusDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
