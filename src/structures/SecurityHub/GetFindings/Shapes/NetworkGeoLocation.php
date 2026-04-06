<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $City
 * @property string|null $Country
 * @property double|null $Lat
 * @property double|null $Lon
 */
class NetworkGeoLocation extends Shape
{
    /**
     * @param array{
     *     City?: string|null,
     *     Country?: string|null,
     *     Lat?: double|null,
     *     Lon?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
