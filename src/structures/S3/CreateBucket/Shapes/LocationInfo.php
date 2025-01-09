<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucket\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AvailabilityZone'|'LocalZone' $Type
 * @property string $Name
 */
class LocationInfo extends Shape
{
    /**
     * @param array{
     *     Type?: 'AvailabilityZone'|'LocalZone',
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
