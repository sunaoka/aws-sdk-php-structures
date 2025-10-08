<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateUserEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $City
 * @property string|null $Country
 * @property double|null $Latitude
 * @property double|null $Longitude
 * @property string|null $PostalCode
 * @property string|null $Region
 */
class EndpointLocation extends Shape
{
    /**
     * @param array{
     *     City?: string|null,
     *     Country?: string|null,
     *     Latitude?: double|null,
     *     Longitude?: double|null,
     *     PostalCode?: string|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
