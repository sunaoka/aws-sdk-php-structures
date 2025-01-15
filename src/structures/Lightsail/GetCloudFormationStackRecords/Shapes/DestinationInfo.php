<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCloudFormationStackRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $service
 */
class DestinationInfo extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     service?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
