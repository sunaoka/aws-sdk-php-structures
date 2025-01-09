<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCloudFormationStackRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $service
 */
class DestinationInfo extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     service?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
