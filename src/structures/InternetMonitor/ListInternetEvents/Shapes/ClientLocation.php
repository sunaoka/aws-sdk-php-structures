<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListInternetEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ASName
 * @property int $ASNumber
 * @property string $Country
 * @property string|null $Subdivision
 * @property string|null $Metro
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
     *     Subdivision?: string|null,
     *     Metro?: string|null,
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
