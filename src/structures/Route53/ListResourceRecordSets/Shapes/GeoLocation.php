<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContinentCode
 * @property string $CountryCode
 * @property string $SubdivisionCode
 */
class GeoLocation extends Shape
{
    /**
     * @param array{
     *     ContinentCode?: string,
     *     CountryCode?: string,
     *     SubdivisionCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
