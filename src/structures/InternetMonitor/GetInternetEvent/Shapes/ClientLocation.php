<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetInternetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ASName
 * @property int $ASNumber
 * @property string $Country
 * @property string $Subdivision
 * @property string $Metro
 * @property string $City
 * @property double $Latitude
 * @property double $Longitude
 */
class ClientLocation extends Shape
{
    /**
     * @param array{
     *     ASName: string,
     *     ASNumber: int,
     *     Country: string,
     *     Subdivision?: string,
     *     Metro?: string,
     *     City: string,
     *     Latitude: double,
     *     Longitude: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
