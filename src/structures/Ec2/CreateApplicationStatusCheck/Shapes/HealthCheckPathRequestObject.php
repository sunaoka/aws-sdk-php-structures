<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateApplicationStatusCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HealthCheckPathSourceRequestObject|null $Source
 * @property list<HealthCheckPathDestinationRequestObject>|null $Destinations
 */
class HealthCheckPathRequestObject extends Shape
{
    /**
     * @param array{
     *     Source?: HealthCheckPathSourceRequestObject|null,
     *     Destinations?: list<HealthCheckPathDestinationRequestObject>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
