<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeResourceRecordSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Latitude
 * @property string $Longitude
 */
class Coordinates extends Shape
{
    /**
     * @param array{
     *     Latitude: string,
     *     Longitude: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
