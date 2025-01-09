<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetUserEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $City
 * @property string $Country
 * @property double $Latitude
 * @property double $Longitude
 * @property string $PostalCode
 * @property string $Region
 */
class EndpointLocation extends Shape
{
    /**
     * @param array{
     *     City?: string,
     *     Country?: string,
     *     Latitude?: double,
     *     Longitude?: double,
     *     PostalCode?: string,
     *     Region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
