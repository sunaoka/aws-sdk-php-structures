<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucket\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AvailabilityZone'|'LocalZone'|null $Type
 * @property string|null $Name
 */
class LocationInfo extends Shape
{
    /**
     * @param array{
     *     Type?: 'AvailabilityZone'|'LocalZone'|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
