<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForPosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $Offset
 */
class TimeZone extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Offset?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
