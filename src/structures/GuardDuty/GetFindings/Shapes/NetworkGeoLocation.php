<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $City
 * @property string $Country
 * @property double $Latitude
 * @property double $Longitude
 */
class NetworkGeoLocation extends Shape
{
    /**
     * @param array{
     *     City: string,
     *     Country: string,
     *     Latitude: double,
     *     Longitude: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
