<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateApplicationStatusCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HealthCheckPathSourceResponseObject|null $Source
 * @property list<HealthCheckPathDestinationResponseObject>|null $Destinations
 */
class HealthCheckPathResponseObject extends Shape
{
    /**
     * @param array{
     *     Source?: HealthCheckPathSourceResponseObject|null,
     *     Destinations?: list<HealthCheckPathDestinationResponseObject>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
